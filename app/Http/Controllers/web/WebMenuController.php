<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebMenuController extends Controller
{
    public function covid_19()
    {
        return view('web.menu.covid-19');
    }

    public function faq()
    {
        return view('web.menu.faq');
    }

    public function group_program()
    {
        return view('web.menu.group-program');
    }

    public function health_and_safety()
    {
        return view('web.menu.health-and-safety');
    }

    public function high_school_program()
    {
        return view('web.menu.high-school-program');
    }

    public function hosting_with_isp()
    {
        return view('web.menu.hosting-with-isp');
    }

    public function intern_and_corporate_housing()
    {
        return view('web.menu.intern-and-corporate-housing');
    }

    public function school_and_company_housing()
    {
        return view('web.menu.school-and-company-housing');
    }

    public function isp_portal()
    {
        return view('web.menu.isp-portal');
    }
}
