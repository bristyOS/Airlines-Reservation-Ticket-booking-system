<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function list(){
        return view ('admin.pages.booking.list');

    }
    public function form(){
        return view ('admin.pages.booking.form');

    }

    public function store(request $request){
       dd($request->all());
    }

}






