<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Show register form
    public function register()
    {
        return view('users.register');
    }
    
    // Store a new user
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8|max:255|confirmed',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);

        auth()->login($user);

        return redirect('/');
    }

    // show the login/sign-in form
    public function login()
    {
        return view('users.login');
    }
    // Login/sign-in form
    public function authenticate(Request $request)
    {

        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You\'re logged in');
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    // Logout a user
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'User logout successfuly');
    }
}
