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

Route::view('dashboard', 'clientPages.Dashboard')->name('dashboard');

Route::view('admindashboard', 'AdminPages.AdminDashboard')->name('admindashboard');

Route::view('services/createService', 'AdminPages.ServiceForm'); 






Route::prefix('services')->group(function(){
Route::get('/',[ServiceController::class,'showServices']);
Route::post('/', [ServiceController::class, 'storeService']);
Route::put('/editservice/{id}',[ServiceController::class, 'editService']);
Route::put('/saveedit/{id}',[ServiceController::class, 'saveEdit']);
Route::delete('/deleteservice/{id}',[ServiceController::class, 'deleteService']);
});




