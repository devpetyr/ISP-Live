<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function login_data(Request $request)
    {
        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required',
        ]);
        if($request->email&& $request->password){
            $userfind = User::where('email',$request->email)->first();
            if($userfind){
                if ($userfind->status == "0"){

                    return back()->with('failed','Sorry ! your account is inactive');
                }elseif ($userfind->is_active == "0"){
                    return back()->with('failed','Oops ! Please verify your email account');
                }

                /*means found user*/
                if(Hash::check($request->password,$userfind->password)){
                    /*matched password*/
                    Auth::login($userfind);
                    switch($userfind->user_role) {
                        case('1'): // admin
                            return redirect()->route('admin_dashboard');
                        break;
                        case('4'): //coordinator
                            return redirect()->route('coordinator_dashboard');
                        break;
                        case('5'): //driver
                            return redirect()->route('driver_dashboard');
                        break;
                        default:
                            return back()->with('failed','This area is for Admin, Coordinator and Driver Only.');
                    }
                    /*matched password end*/
                }else{
                    return redirect()->route('isp_login')->with('failed','Password is incorrect')->with('email',$request->email);
                }
                /*means found user end*/
            }else{
                return redirect()->route('isp_login')->with('failed','Email not found');
            }
        }else{
            return redirect()->route('isp_login')->with('failed','Please fill required fields');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('isp_login');
    }
}
