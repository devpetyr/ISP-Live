<?php

namespace App\Http\Controllers\coordinator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoordinatorDashboardController extends Controller
{
    public function dashboard()
    {
        return view('coordinator.dashboard');
    }
}
