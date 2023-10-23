<?php

namespace App\Http\Controllers;
use App\Models\Passenger;

use Illuminate\Http\Request;

class PassengerController extends Controller
{
    public function list(){
        $passengers=Passenger::all();
        return view ('admin.pages.passenger.list',compact('passengers'));

    }
    public function form(){
        return view ('admin.pages.passenger.form');

    }
    public function store(request $request){

        // dd($request->all());

        Passenger::create([
            'name' =>$request->name,
            'email' =>$request->email_address,
            'address' =>$request->address,
            'contact_number' =>$request->number,

        ]); 
        return redirect()->back();

    }


    }


