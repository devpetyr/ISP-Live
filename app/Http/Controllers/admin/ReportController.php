<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function placements()
    {
        return view('admin.reports.placements');
    }
    public function placements_status()
    {
        return view('admin.reports.placements-status');
    }
}
