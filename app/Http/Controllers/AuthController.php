<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('pages.auth.register');
    }

    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'unique:users,email'],
            'password' => ['required', 'string', 'confirmed'],
        ]);
        
        $user = \App\Models\User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
        ]);

        $user->remember_token = $user->createToken('auth_token')->plainTextToken;
        $user->save();

        Auth::login($user);

        return redirect()->route('dashboard')->with('status', 'You are logged now');
    }

    public function showLogin()
    {
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        // check email
        $user = \App\Models\User::where('email', $fields['email'])->first();

        // check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return back()->with('error', 'Login failed!');
        }

        $user->remember_token = $user->createToken('auth_token')->plainTextToken;
        $user->save();

        Auth::login($user);

        return redirect()->route('dashboard')->with('status', 'You are logged now');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();

        return redirect()->route('index')->withCookie(cookie('remember_token', null, 0))->with('success', 'You are logged out!');
    }
}
