<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Airline;

class AirlinesController extends Controller
{
    public function list(){
        $Airlines=Airline::all();
        return view ('admin.pages.airlines.list',compact('Airlines'));

    }
    public function form(){
        return view ('admin.pages.airlines.form');

    }
    public function store(request $request){
        // dd($request->all());
//image handaling

// $fileName = null;
if($request->hasFile ('image')){
$file = $request->file ('image');
$fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();
$file->storeAs('/uploads', $fileName);

}

// dd($fileName);

    Airline::create([
        'Airlines_name'=>$request->Airlines_name,
        'Airport_name'=>$request->Airport_name,
       
        'image'=>$fileName,

    ]);
    return redirect()->back();
}
}