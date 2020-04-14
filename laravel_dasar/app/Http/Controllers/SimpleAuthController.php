<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class SimpleAuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(LoginRequest $request)
    {
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)) {
            return redirect('/');
        }
        return redirect()->back()->with('danger','Maaf Login Gagal');
    }

    public function logout()
    {
        Auth::logout();
        return view('auth.login');
    }
}
