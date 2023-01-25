<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index ()
    {
        return view('login.index', [
            "title" => "Login"
        ]);
    }

    public function store (Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/')->with('success', 'Login successful!');
        }

        return back()->with('error', 'Login failed!');
    }
}
