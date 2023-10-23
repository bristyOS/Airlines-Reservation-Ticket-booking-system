<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function list(){
        return view ('admin.pages.airport.list');

    }
    public function form(){
        return view ('admin.pages.airport.form');

    }
   public function store(request $request){
    dd($request->all());
   }


}


