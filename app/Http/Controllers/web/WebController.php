<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserRole;

class WebController extends Controller
{
    public function home()
    {
        return view('web.index');
    }

    public function about_us()
    {
        return view('web.about-us');
    }

    public function agent()
    {
        return view('web.agents');
    }

    public function blog()
    {
        return view('web.blog');
    }

    public function career()
    {
        return view('web.careers');
    }

    public function contact_us()
    {
        return view('web.contact-us');
    }
    public function under_construction()
    {
        return view('web.under-construction');
    }

}
