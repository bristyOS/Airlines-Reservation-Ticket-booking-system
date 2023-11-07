<?php

namespace App\Http\Controllers;
use App\Models\Passenger;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PassengerController extends Controller
{
    public function list(){

        notify()->success('Welcome to passenger Notify ⚡️');

        $passengers=Passenger::paginate(5);
        return view ('admin.pages.passenger.list',compact('passengers'));

    }
    public function form(){
        return view ('admin.pages.passenger.form');

    }
    public function store(request $request){
        $validate = Validator::make($request->all(),[
            'name'=>'required',
            'email' =>'required',
            'address' =>'required',
            'contact_number' =>'required',

        ]);
        if($validate->fails()){
            return redirect()->back()->withErrors('$validate');
        }
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


