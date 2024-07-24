<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\ActivityLogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout', function () {
    return view('layout');
});

/***
 * 
 * 
 *  LOGIN ROUTES
 * 
 * 
 */

Route::get('/userlogin', function () {
    return view('azarcon.userlogin');
});

Route::get('/adminlogin', [AdminLoginController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/adminlogin', [AdminLoginController::class, 'login'])->name('admin.login');


/***
 * 
 * 
 *  END OF LOGIN ROUTES
 * 
 * 
 */

 /***
 * 
 * 
 *  REGISTER ROUTES
 * 
 * 
 */

Route::get('/userregistration', function () {
    return view('azarcon.userregistration');
});

Route::get('/adminregistration', [AdminController::class, 'showRegistrationForm'])->name('admin.registration.form');
Route::post('/adminregistration', [AdminController::class, 'register'])->name('admin.registration');

/***
 * 
 * 
 *  END OF REGISTER ROUTES
 * 
 * 
 */


 /***
 * 
 * 
 *  DASHBOARD ROUTES
 * 
 * 
 */
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/users', [UserListController::class, 'index'])->name('users');
Route::get('/activitylogs', [ActivityLogController::class, 'index'])->name('activitylogs');

Route::get('/accountrecovery', function () {
    return view('azarcon.accountrecovery');
});

Route::post('/logout', function () {
    Auth::logout();
    Session::flush(); 
    return redirect('/'); 
})->name('logout');

/***
 * 
 * 
 *  END OF DASHBOARD ROUTES
 * 
 * 
 */
