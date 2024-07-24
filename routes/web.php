<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userlogin', function () {
    return view('azarcon.userlogin');
});

Route::get('/adminlogin', function () {
    return view('azarcon.adminlogin');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/userregistration', function () {
    return view('azarcon.userregistration');
});

Route::get('/adminregistration', function () {
    return view('azarcon.adminregistration');
});

Route::get('/dashboard', function () {
    return view('azarcon.dashboard');
});

Route::get('/accountrecovery', function () {
    return view('azarcon.accountrecovery');
});