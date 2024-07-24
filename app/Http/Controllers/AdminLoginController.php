<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('azarcon.adminlogin');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        try {
            $credentials = [
                'emailaddress' => $request->input('email'),
                'password' => $request->input('password'),
            ];

            if (Auth::guard('admin')->attempt($credentials)) {
                $request->session()->regenerate();

                $admin = Auth::guard('admin')->user();
                Cache::put("admin:{$admin->id}", $admin, now()->addMinutes(30));

                Cache::put("session:{$request->session()->getId()}", [
                    'emailaddress' => $request->input('email'),
                    'password' => $request->input('password'),
                ], now()->addMinutes(30));

                Log::info('Login successful for admin: ' . $admin->emailaddress);
                return redirect()->intended('/dashboard');
            }

            Log::warning('Login failed for admin: ' . $request->input('email'));
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        } catch (\Exception $e) {
            Log::error('Login error: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Login failed. Please try again later.']);
        }
    }
}
