<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function list(){

        return view('admin.pages.dashboard.list');
    }
    
}
