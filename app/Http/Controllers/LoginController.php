<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController{
    
    /* 
    Have to take user input request and match it with 
    the information in the database.
    */
    public function login(Request $request){

    //request validation for login inputs.
        
         
        $credentials = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $user = Auth::user();


            if($user->role == 'Admin'){
                return redirect('/admin/dashboard');
            }else{
               //was about to add an admin authentication layer
               return view('clientPages.Dashboard');

            // Use lowercase for consistency with database
            if($user->role === 'Admin'){
                return redirect()->route('admindashboard');

            }
            
            return redirect()->route('dashboard');
        }

        
        //return user back to login page if not authenticated
    return back()->withErrors(['email' => 'The provided credentials are invalid.'])->onlyInput('email');
          
    }
}