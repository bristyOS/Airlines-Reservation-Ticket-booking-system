<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Seat;

class SearchController extends Controller
{
    public function list(Request $request){


        
        $Flights=Flight::where('from_airport',$request->flying_from)->where('to_airport',$request->flying_to)->get();
        
       

        return view('frontend.pages.show-flight',compact('Flights'));
    }



public function passenger(Request $request, $id){

    $Flights=Flight::find($id);
    //$flights=Flight::all();
    // dd($flights);
  
    
    return view('frontend.pages.passenger', compact('Flights'));
}




}

