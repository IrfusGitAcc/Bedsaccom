<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


use App\Models\Property;

class AdminController extends Controller
{
     public function showLoginForm()
    {
        return view('admin.login-form'); 
    }

    // Handle login action
    public function login(Request $request)
    {
        // Validate request
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Hardcoded credentials (your case: bedforshire / admin)
        $validUsername = 'bedfordshire';
        $validPassword = 'admin';

        if ($request->username === $validUsername && $request->password === $validPassword) {
            // Store session
            $request->session()->put('admin_logged_in', true);
            $request->session()->put('admin_username', $validUsername);

            return redirect()->route('properties')->with('success', 'Login successful!');
        }

        return back()->withErrors(['Invalid username or password']);
    }

    // Logout
    public function logout(Request $request)
    {
        $request->session()->forget(['admin_logged_in', 'admin_username']);
        return redirect()->route('admin.login')->with('success', 'Logged out successfully!');
    }
}
