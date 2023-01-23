<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index ()
    {
        return view('register.index', [
            "title" => "Register"
        ]);
    }

    public function store (Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'username' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

    }
}
