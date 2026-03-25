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

Route::view('/admin/dashboard', 'AdminPages.AdminDashboard');


Route::view('/admin/services/create', 'AdminPages.ServiceForm'); 
Route::get('EditService', function(){
    return view('AdminPages.EditService');
});
Route::get('/admin/services',[ServiceController::class,'showServices']);
Route::post('/admin/services/NewService', [ServiceController::class, 'storeService']);
Route::put('/admin/services/editservice/{id}',[ServiceController::class, 'editservice']);
Route::delete('/admin/services/deleteservice/{id}',[ServiceController::class, 'deleteService']);




