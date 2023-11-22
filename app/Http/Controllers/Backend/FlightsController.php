<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightsController extends Controller
{
    public function list(){
        $flights=Flight::all();
        return view ('admin.pages.flights.list',compact ('flights'));

    }

    public function form(){
        return view ('admin.pages.flights.form');
    }
    public function store(request $request){
       // dd($request->all());
       Flight::create([
        'number' =>$request->number,
        'destination' =>$request->Destination,
        'arrival_time' =>$request->arrival_time,
        'departure_time' =>$request->departure_time,
        'airlines' =>$request->airlines,

    ]); 
    return redirect()->back();


       
    
    }

    
}
