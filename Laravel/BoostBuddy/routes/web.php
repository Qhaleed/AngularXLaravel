<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DuoRequestController;

Route::get('/', function () {
    return view('index');
});



Route::get('/', [DuoRequestController::class, 'index']);

Route::get('/duo-request/create', [DuoRequestController::class, 'create'])->name('duo-requests.create');
Route::post('/duo-request', [DuoRequestController::class, 'store'])->name('duo-requests.store');
Route::get('/duo-requests', [DuoRequestController::class, 'index'])->name('duo-requests.index');


// All working
Route::post('login', LoginController::class)->name('login.attempt');
Route::post('logout', LogoutController::class)->name('logout.attempt');
Route::post('signup', SignupController::class)->name('signup.attempt');
// -----------


// Route for getting the contact for each ticket


Route::get('/duo-request/{id}/contact', [DuoRequestController::class, 'contact'])->name('duo-request.contact');

