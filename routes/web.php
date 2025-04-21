<?php

use App\Http\Controllers\Backend\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Backend\User\UserProfileController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Admin Auth Route
Route::group(['middleware' => 'auth', 'prefix' => 'admin','as' => 'admin.'], function () {
    Route::get('/login', [AdminLoginController::class, 'login'])->name('login');
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [AdminLoginController::class, 'dashboard'])->name('dashboard');
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// user profile
Route::group(['middleware' => 'auth', 'prefix' => 'user','as' => 'user.'], function () {
    Route::get('/profile', [UserProfileController::class, 'index'])->name('profile');
    
});

// Frontend routes
Route::group(['as' => 'f.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});