<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserListController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user();

        if ($admin && Admin::where('emailaddress', $admin->emailaddress)->exists()) {
            return view('userlist'); 
        }

        Auth::guard('admin')->logout();
        Session::flush(); 
        return redirect('/'); 
    }
}
