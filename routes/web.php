<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupController;

Route::get('/', function () {
    return view('home');
});

Route::get('/signup', function(){
    return view('signup');
});

Route::post('/signup',[signupController::class,'validation']
);

