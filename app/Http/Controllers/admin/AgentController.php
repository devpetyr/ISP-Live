<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function agent()
    {
        return view('admin.agents.agents');
    }
}
