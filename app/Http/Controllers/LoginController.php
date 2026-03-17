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
            'email'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($credentials)){

             $user = Auth::user();

            if($user->role == 'Admin'){
                return view('AdminPages.AdminDashboard');
            }else{
               //was about to add an admin authentication layer
               return view('clientPages.Dashboard');
            }
            
        }

        
        //return user back to login page if not authenticated
        return back()->withErrors('The provided credentials can not be found in our records');
          
    }
}