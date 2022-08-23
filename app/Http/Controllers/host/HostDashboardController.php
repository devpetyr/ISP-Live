<?php

namespace App\Http\Controllers\host;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HostDashboardController extends Controller
{
    public function dashboard()
    {
        return view('host.dashboard');
    }
}
