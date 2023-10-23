<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function list(){
        return view ('admin.pages.booking.list');

    }
    public function form(){
        return view ('admin.pages.booking.form');

    }

    public function store(request $request){
       dd($request->all());
    }

}






