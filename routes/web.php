<?php

use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use Illuminate\http\Request;
use App\Http\Middleware\TestMiddleware;

Route::view('/', 'General.home');

Route::prefix('signup')->group(function(){
   Route::get('/',function(){
    return view('General.signup');
   });
   Route::post('/register', [SignupController::class, 'store']);
});


Route::get('/login', function(){
    return view('General.login');
});

Route::post('/login',[LoginController::class,'login']
);

Route::view('/dashboard', 'clientPages.Dashboard');

Route::view('/admindashboard', 'AdminPages.AdminDashboard');

Route::view('/serviceform', 'AdminPages.ServiceForm'); 
Route::get('EditService', function(){
    return view('AdminPages.EditService');
});
Route::get('/services',[ServiceController::class,'showServices']);
Route::post('/services', [ServiceController::class, 'storeService']);
Route::put('/services/editservice/{id}',[ServiceController::class, 'editservice']);
Route::delete('/services/deleteservice/{id}',[ServiceController::class, 'deleteService']);




