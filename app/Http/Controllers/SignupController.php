<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;



class SignupController
{

    public function store(Request $request)
    {    
        

          $request->validate([
            'name'=>'required|unique:users',
            'email'=>'required|unique:users',
            'password'=>'required|min:5'
        ]);   

         User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password'))
            ]);

          
        
       return redirect('dashboard');
    }
}
