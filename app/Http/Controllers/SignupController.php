<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;



class SignupController
{

    public function store(Request $request)
    {    

         User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password'))
            ]);

        
       return "Succesful signup!";
    }
}
