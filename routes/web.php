<?php

use App\Http\Controllers\Backend\User\UserProfileController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// user profile
Route::group(['middleware' => 'auth', 'prefix' => 'user','as' => 'user'], function () {
    Route::get('/profile', [UserProfileController::class, 'index'])->name('.profile');
});

// Frontend routes
Route::group(['as' => 'f'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('.home');
});