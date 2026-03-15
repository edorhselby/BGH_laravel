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

       //admin pwd(admin1233) = $2y$12$DPoej0J1J9APkIWRBW4kNOH6LGmP22qZ2/dpo3G8frkxYsiTe9HBi 
    }
}
