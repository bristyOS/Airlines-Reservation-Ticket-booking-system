<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Seat;

use Illuminate\Http\Request;

class seatController extends Controller
{
    public function list()
    {
        $seats=Seat::all();
        return view ('admin.pages.seat.list',compact ('seats'));
    }
    
    public function form()
    {
        return view ('admin.pages.seat.form');
    }

    public function store(request $request){
       // dd($request->all());
       Seat::create([
            'flight_number'=>$request->flight_number,
            'seat_number'=>$request->seat_number,
            'seat_class'=>$request->seat_class,
            'seat_type'=>$request->seat_type,
            'seat_price'=>$request->seat_price,
            'location'=>$request->location,
            'seat_allocation'=>$request->seat_allocation,


       ]);
       return redirect()->back();

    }


}
