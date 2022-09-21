<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentAuthController extends Controller
{
    public function profile()
    {
        return view('student.profile.profile-update');
    }
    public function profile_update_process(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required'
        ]);

        $model=User::where('id',Auth::user()->id)->first();
        $model->first_name = $request->first_name;
        $model->last_name = $request->last_name;
        $model->save();
        return redirect()->route('sd_profile')->with('success', 'Profile updated successfully');
    }
    public function password_update()
    {
        return view('student.profile.password-update');
    }
    public function password_update_process(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required',
        ]);


        if(Hash::check($request->old_password, Auth::user()->password))
        {
            $model=User::where('id',Auth::user()->id)->first();
            $model->password = Hash::make($request->new_password);
            $model->save();
            return redirect()->route('sd_password')->with('success', 'Password updated successfully');
        }else{
            return redirect()->route('sd_password')->with('error', 'Invalid old password.');
        }
    }
}
