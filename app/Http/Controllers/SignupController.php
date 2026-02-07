<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class SignupController
{

    public function store(Request $request)
    {    
        dd($request->all(),$request->method());
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);


         User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password'))
            ]);

        
       return "Succesful signup!";
    }
}
