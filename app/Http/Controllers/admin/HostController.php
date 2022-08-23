<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class HostController extends Controller
{
    public function profile()
    {
        return view('admin.host.profile');
    }
    public function details()
    {
        $users = User::where('user_role',3)->get();
        return view('admin.host.details',compact('users'));
    }
    public function visits()
    {
        return view('admin.host.visits');
    }
}
