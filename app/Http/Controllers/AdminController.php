<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function showRegistrationForm()
    {
        return view('azarcon.adminregistration');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employeenumber' => 'required|unique:admins',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'emailaddress' => 'required|email|unique:admins',
            'contactnumber' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Admin::create([
            'employeenumber' => $request->input('employeenumber'),
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'emailaddress' => $request->input('emailaddress'),
            'contactnumber' => $request->input('contactnumber'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect('/adminlogin')->with('success', 'Admin registered successfully.');
    }
}
