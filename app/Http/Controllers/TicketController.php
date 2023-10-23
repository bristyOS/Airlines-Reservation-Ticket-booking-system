<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function list()
    {
        return view ('admin.pages.ticket.list');
    }
    
    public function form()
    {
        return view ('admin.pages.ticket.form');
    }

    public function store(request $request){
        dd($request->all());

    }


}
