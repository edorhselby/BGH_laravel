<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\TestMiddleware;

Route::view('/', 'home');

Route::prefix('signup')->group(function(){
   Route::get('/',function(){
    return view('signup');
   });
   Route::post('/register', [SignupController::class, 'store']);
});


Route::get('/login', function(){
    return view('login');
});

Route::post('/login',[LoginController::class,'login']
);

Route::view('/dashboard', 'Dashboard');

Route::view('/admindashboard', 'AdminDashboard');



