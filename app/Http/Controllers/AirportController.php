<?php

namespace App\Http\Controllers;
use App\Models\Airport;

use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function list(){
        $airports=Airport::all();
        return view ('admin.pages.airport.list',compact('airports'));

    }
    public function form(){
        return view ('admin.pages.airport.form');

    }
   public function store(request $request){
    //dd($request->all());
Airport::create([
'Airport_code'=>$request->airport_code,
'airport_name'=>$request->airport_name,
'location'=>$request->location,
'terminal'=>$request->terminal,
'service_available'=>$request->service_available,
'runway'=>$request->runway,
'gateway'=>$request->gateway,




]);
return redirect()->back();

   }


}


