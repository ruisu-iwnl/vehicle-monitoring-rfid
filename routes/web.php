<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userlogin', function () {
    return view('azarcon.userlogin');
});

// Registration Routes
Route::get('/adminregistration', [AdminController::class, 'showRegistrationForm'])->name('admin.registration.form');
Route::post('/adminregistration', [AdminController::class, 'register'])->name('admin.registration');

Route::get('/adminlogin', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/adminlogin', [AdminLoginController::class, 'login']);

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/userregistration', function () {
    return view('azarcon.userregistration');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/accountrecovery', function () {
    return view('azarcon.accountrecovery');
});
