<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Flight;

class SearchController extends Controller
{
    public function list(Request $request){


        
        $Flights=Flight::where('from_airport',$request->flying_from)->where('to_airport',$request->flying_to)->get();
        
        return view('frontend.pages.show-flight',compact('Flights'));
    }



public function passenger(Request $request){

    $Flights=Flight::where('from_airport',$request->flying_from)->where('to_airport',$request->flying_to)->get();
    //$flights=Flight::all();
    // dd($flights);
  //  $flights=Flight::find($id);
    
    return view('frontend.pages.passenger', compact('Flights'));
}




}

