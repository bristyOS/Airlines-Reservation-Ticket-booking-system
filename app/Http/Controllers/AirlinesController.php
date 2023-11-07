<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirlinesController extends Controller
{
    public function list(){
        return view ('admin.pages.airlines.list');

    }
    public function form(){
        return view ('admin.pages.airlines.form');

    }
    public function store(request $request){
        dd($request->all());
       }

}
