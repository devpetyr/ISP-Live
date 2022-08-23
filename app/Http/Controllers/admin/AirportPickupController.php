<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AirportPickupController extends Controller
{
    public function airport_pickup()
    {
        return view('admin.airport-pickup.airport-pickup');
    }
    public function drivers()
    {
        return view('admin.airport-pickup.drivers');
    }
    public function airlines()
    {
        return view('admin.airport-pickup.airlines');
    }
    public function add_airlines()
    {
        return view('admin.airport-pickup.add-airlines');
    }
}
