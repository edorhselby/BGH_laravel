<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('home');
});

Route::get('/signup', function(){
    return view('signup');
});

Route::post('/signup',[SignupController::class,'store']
);

Route::get('/login', function(){
    return view('login');
});

Route::post('/login',[LoginController::class,'login']
);



