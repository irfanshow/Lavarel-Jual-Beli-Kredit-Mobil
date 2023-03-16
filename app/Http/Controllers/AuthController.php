<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {


        return view('Customer.loginUser');
    }

    public function register()
    {


        return view('Customer.registerUser');
    }

    public function prosesLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        // return redirect('/login');
        return view('Customer.loginUser');
    }
}
