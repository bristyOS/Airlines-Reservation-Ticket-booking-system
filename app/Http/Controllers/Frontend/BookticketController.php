<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Airport;
use Illuminate\Http\Request;
use App\Models\Booktickets;

class BookticketController extends Controller
{
    public function form(Request $request){

        $airline=Airport::all();
    
     
        return view('frontend.pages.booktickets',compact('airline'));

       

    }

   
 

}
   

