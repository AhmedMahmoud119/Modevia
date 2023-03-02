<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class AuthController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('users');
        }

        return redirect()->route('login')->withErrors([
            'email' => 'Email or password is incorrect',
        ]);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('login');
    }
}
