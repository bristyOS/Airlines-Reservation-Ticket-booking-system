<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuynowController extends Controller
{
    public function successful(){
        return view('frontend.pages.buynow');
    }
}
