<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $login = $request->login;
        $password = $request->password;
        $credentials = [
            'email' => $login,
            'password' => $password
        ];
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return to_route('home')->with('success', $login.'You are logged in successfully');
        } else {

            return redirect()->back()->withErrors(['login' => 'Invalid credentials'])->onlyInput('login');
        }
    }
    public function show(Request $request)
    {
        return view("login.show");
    }
}