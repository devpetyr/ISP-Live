<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\NotificationModel;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function notification()
    {
        $notifications = NotificationModel::with('getUser')->with('getUser.getUserRole')->orderby('created_at', 'DESC')->get();
        return view('admin.notification.notification', compact('notifications'));
    }
}
