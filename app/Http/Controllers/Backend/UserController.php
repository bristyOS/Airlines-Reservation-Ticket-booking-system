<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function loginForm(){
return view('admin.pages.login');




}
public function loginpost(Request $request){

  $val=Validator::make($request->all(),
    [
       'email'=>'required|email',
       'password'=>'required|min:6'
    ]);

    if($val->fails())
    {
        //message
        return redirect()->back()->withErrors($val);
    
    }
    $credentials=$request->except('_token');
   // $credentials=$request->only('email','password');

   $login=auth()->attempt($credentials);

   if($login)
   {
         return redirect()->route('dashboard');
   }
  return redirect()->back()->witherrors(['invalid user email or password' ]);
  }

  public function logout(){
    auth()->logout();
    return redirect()->route('admin.login');
  }
}




