<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Method Login
    public function login() {
        return view('auth.login');
    }

    // Method Register
    public function register() {
        return view('auth.register');
    }

    // Store Register
    public function storeRegister(Request $request) {

        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email', 
            'password'  => 'required|string|min:6|confirmed', 
        ]);
        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => bcrypt($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful, please login');
    }

    //Store Login
    public function storeLogin(Request $request) {
       
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->remember)) {

            return redirect()->intended(route('dashboard'))->with('success', 'You are logged in successfully!');
        }

        return back()->with('error', 'Invalid email or password')->withInput();
    }

    public function logout(Request $request) {
        Auth::logout(); 
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken(); 
    
        return redirect('/login');
    }
}
