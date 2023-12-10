<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Airline;
use App\Models\Airport;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightsController extends Controller
{
    public function list(){
        $flights=Flight::with(['fromAirport','toAirport', 'airline'])->get();
        // dd($flights);
        return view ('admin.pages.flights.list',compact ('flights'));

    }

    //Delete-----------

    public function delete ($id)
   {
   $flights=Flight::find($id);
     if ($flights)
  {
    $flights->delete();
  }
notify()->success('flight deleted successfully.');
return redirect()->back();
}


    public function form(){

        $airports=Airport::all();
        $airlines=Airline::all();
        return view ('admin.pages.flights.form',compact('airports','airlines'));
    }


    public function store(request $request){

        // dd($request->all());

        $fileName = null;
        if ($request->hasFile ('image')){
            $photo =$request->file('image');
            $fileName = date('Ymdhis').'.'. $photo->getClientOriginalExtension();
            $photo->storeAs('uploads/',$fileName);
        }

        
    


    //    dd($fileName);

       Flight::create([
        'number' =>$request->number,
        'destination' =>$request->Destination,
        'from_airport' =>$request->from,
        'to_airport' =>$request->to,
        'arrival_time' =>$request->arrival_time,
        'departure_time' =>$request->departure_time,
        'airlines' =>$request->airlines,
        'price' =>$request->price,
        'image' => $fileName,

    ]); 
    return redirect()->back();


       
    
    }

    
}
