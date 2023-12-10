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
//delete----------------

public function delete ($id)
   {
   $seats=Seat::find($id);
     if ($seats)
  {
    $seats->delete();
  }
notify()->success('Seat deleted successfully.');
return redirect()->back();
}


    
    
    public function form()
    {
        return view ('admin.pages.seat.form');
    }

    public function store(request $request){

            $fileName = null;
            if($request->hasFile ('image')){
                $photo = $request->file ('image');
                $fileName = date('Ymdhis').'.'. $photo->getClientOriginalExtension();
                $photo->storeAs('uploads/', $fileName);
            }

       // dd($request->all());
       Seat::create([
            
            'seat_class'=>$request->seat_class,
            'image'=>$fileName,
            'seat_type'=>$request->seat_type,
            'seat_price'=>$request->seat_price,
            'location'=>$request->location,
            'seat_allocation'=>$request->seat_allocation,
    

       ]);
       return redirect()->back();

    }


}
