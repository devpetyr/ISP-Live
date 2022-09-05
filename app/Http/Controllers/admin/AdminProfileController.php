<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use Auth;

class AdminProfileController extends Controller
{

     public function manage_password()
    {
        return view('admin.adminProfile.admin-password-update');
    }
    
    public function password_process(Request $request)
    {
        // dd($request);
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
            return back()->with('success', 'Password updated successfully');
        }
         return back()->with('error', 'Old password not mached');
    }
    
    
     public function manage_profile()
    {
        return view('admin.adminProfile.admin-profile-update');
    }
    
    public function profile_process(Request $request)
    {
          $request->validate([
            'first_name' => 'required',
            'last_name' => 'required'
        ]);
        
            $model=User::where('id',Auth::user()->id)->first();
            $model->first_name = $request->first_name;
            $model->last_name = $request->last_name;
            $model->save();
            return back()->with('success', 'Profile updated successfully');
       
    }
  
   
}
