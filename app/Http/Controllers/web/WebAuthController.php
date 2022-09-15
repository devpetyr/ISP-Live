<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Controllers\EmailController;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WebAuthController extends EmailController
{
    public function register_portal()
    {
        return view('web.register');
    }

    public function register_form($id)
    {
        $role = UserRole::find($id);
        if ($role)
        {
            return view('web.register-form', compact('role'));
        }
        return redirect()->route('web_home');
    }

    public function register_code()
    {
        return view('web.register-code');
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'user_role' => 'required|integer|min:1|digits_between: 1,5',
            'email' => 'required|email|unique:users',
            'password' => ['required', 'string', 'min:8', 'required_with:password_confirmation'],
            'password_confirmation' => ['required', 'string', 'required_with:password', 'same:password'],
        ],
            [
                'first_name.required' => 'The first name field is required',
                'last_name.required' => 'The last name field is required',
            ]
        );

        if (Auth::check() && Auth::user()->user_role == 1)
        {
            return redirect()->route('admin_dashboard');
        }
        elseif (Auth::check() && Auth::user()->user_role > 1 && Auth::user()->user_role <= 5)
        {
            $userrole = UserRole::find(Auth::user()->user_role);
            $role = strtolower($userrole->user_role);
            return redirect()->route($role . '_dashboard');
        }
        elseif (Auth::check() === false)
        {
            $result = User::where('email', $request->email)->first();
            if (!$result)
            {
                $model = new User();
                $model->first_name = $request->first_name;
                $model->last_name = $request->last_name;
                $model->email = $request->email;
                $model->password = Hash::make($request->password);
                $model->user_role = $request->user_role;
                $model->status = 1;
                $model->application_submitted = 0;
                $model->save();

                if ($model->save())
                {
                    // $this->verifyEmail($model->id);
                    $this->GA_VerifyEmail($model->first_name,$model->last_name, $model->email, route('user_verified', $model->id));

                    return redirect()->route('login')->with('success', 'You are successfully registered , Please verify your email. ');
                }
                else
                {
                    return back()->with('error', 'Please register again');
                }

            }
            else
            {
                return back()->with('error', 'Already registered please login!');
            }
        }
        return redirect()->route('web_home');
    }

    //execute from user email
    public function user_verified($id)
    {
        $user = User::find($id);
        if ($user->is_active === 1){
            return redirect()->route('login')->with('error', 'This link is no longer valid.');
        }
        $user->is_active = 1;
        $user->save();

        return redirect()->route('login')->with('success', 'Email authorized! You can login now.');
    }

    public function login()
    {
        if (!Auth::check())
        {
            return view('web.login');
        }
        elseif (Auth::check() && Auth::user()->user_role === 1)
        {
            return redirect()->route('admin_dashboard');
        }
        elseif(Auth::check() && Auth::user()->user_role === 2)
        {
            return redirect()->route('student_application_form');
        }
        elseif(Auth::check() && Auth::user()->user_role === 3)
        {
            return redirect()->route('host_dashboard');
        }

//        elseif (Auth::check() && Auth::user()->user_role > 2 && Auth::user()->user_role <= 5)
//        {
//            $userrole = UserRole::find(Auth::user()->user_role);
//            $role = strtolower($userrole->user_role);
//            return redirect()->route($role . '_dashboard');
//        }
        else{
    
            return back()->with('error','This area is for student and host only.');
        }
    }

    public function logged_in(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        $userfind = User::where('email', $request->email)->where('status', 1)->first();
        if ($userfind)
        {
            /*means found user*/
            if($userfind->is_active === 1)
            {
                /*means user verified*/
                if (Hash::check($request->password, $userfind->password))
                {
                    /*matched password*/

                    if ($userfind->user_role === 2)
                    {
                        Auth::login($userfind);
                        if($userfind->is_reset === 1){
                            $userfind->is_reset = 0;
                            $userfind->save();
                        }
                        return redirect()->route('student_application_form');
                        // return redirect()->route('student_dashboard');
                    }
                    elseif($userfind->user_role === 3)
                    {
                        Auth::login($userfind);
                        return redirect()->route('host_application_form');
                        // return redirect()->route('host_dashboard');
                    }
                    else {
                        return back()->with('error', 'This area is for student and host only.');
                    }
                    /*matched password end*/
                } else
                {
                    return redirect()->route('login')->with('error', 'Password is incorrect')->with('email', $request->email);
                }
            }
            else
            {
                return back()->with('error', 'Please verify your email first.');
            }
            /*means found user end*/
        }
        else
        {
            return back()->with('error', 'Email not found.');
        }

    }
/*************************************** Forgot Password Start *****************************************/
    public function forgot_password_view()
    {
        return view('web.forgot-password');
    }

    public function forgot_password(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $userfind = User::where('email', $request->email)->where('user_role', 2)->orWhere('user_role', 3)->where('status',1)->where('is_active',1)->first();
        if ($userfind) {
            $userfind->is_reset = 1;
            $userfind->save();
            $details = $userfind;
            // $this->forgotpassword($details);
            $this->GA_ForgotPassword($userfind->email, route('web_reset_password', $userfind->id));

            return redirect()->route('login')->with('success', 'An email has been sent to you!');
        } else {
            return back()->with('error', 'Your email is not valid');
        }
    }

    public function reset_password(User $user)
    {
        if ($user->is_reset === 1) {
            return view('web.reset-password', compact('user'));
        } else {
            return redirect()->route('web_home')->with('error', 'This link is no longer valid.');
        }

    }

    protected function reset_password_submit(User $user, Request $request)
    {
        $data = $request->validate([
            'new_password' => 'min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'min:6'
        ]);
        if (Hash::check($request->new_password, $user->password)) {
            return back()->with('error', 'New password cannot be the same as old password.');

        } else {

            if ($user->is_reset === 1) {
                $user->password = Hash::make($request->new_password);
                $user->is_reset = 0;
                $user->save();
                return redirect()->route('web_home')->with('success', 'Password Update Successfully');
            } else {
                return redirect()->route('web_home')->with('error', 'Your Link Expired');
            }
        }
    }
    
    /**************************************** Forgot Password End ******************************************/

    public function logout()
    {
        Auth::logout();
        return redirect()->route('web_home')->with('success', 'Logout successfully');
    }
}
