<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController{
    
    /* 
    Have to take user input request and match it with 
    the information in the database.
    */
    public function login( Request $request){

    //request validation for login inputs.

        $credentials = $request->validate([
            'name'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($credentials)){
             return view('Dashboard',['name'=>$request->name]);
        }
        
        //return user back to login page if not authenticated
        return back()->withErrors('The provided credentials can not be found in our records');
          
    }
}