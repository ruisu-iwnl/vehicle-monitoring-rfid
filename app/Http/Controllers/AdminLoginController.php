<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('azarcon.adminlogin');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
    
        $credentials = $request->only('email', 'password');
    
        try {
            Log::info('Attempting login for email: ' . $request->input('email'));
    
            if (Auth::attempt($credentials)) {
                Log::info('Login successful');
    
                $request->session()->regenerate();
    
                Log::info('User logged in successfully.');
    
                return redirect()->route('dashboard'); // Directly use route name
            }
    
            Log::warning('Login failed for email: ' . $request->input('email'));
            return Redirect::back()->withErrors(['email' => 'Invalid email or password.'])->withInput();
        } catch (\Exception $e) {
            Log::error('Login error: ' . $e->getMessage());
            return Redirect::back()->withErrors(['error' => 'Login failed. Please try again later.']);
        }
    }
    
}
