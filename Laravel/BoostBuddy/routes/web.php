<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

// Route::get('login', function (){
//     return view('login');
// });

Route::post('login', LoginController::class)->name('login.attempt');
Route::post('logout', LogoutController::class)->name('logout.attempt');
Route::post('signup', SignupController::class)->name('signup.attempt');

// Route::view('dashboard','dashboard')->name('dashboard');

