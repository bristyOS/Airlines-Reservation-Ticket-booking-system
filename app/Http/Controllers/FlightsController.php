<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlightsController extends Controller
{
    public function list(){
        return view ('admin.pages.flights.list');

    }

    public function form(){
        return view ('admin.pages.flights.form');

    }
    
}
