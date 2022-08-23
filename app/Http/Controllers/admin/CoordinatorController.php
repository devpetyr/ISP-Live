<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoordinatorController extends Controller
{
    public function coordinators()
    {
        return view('admin.coordinators.coordinators');
    }
}
