<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('login', function (){
    return view('login');
});

Route::post('login', LoginController::class)->name('login.attempt');

Route::view('dashboard','dashboard')->name('dashboard');
