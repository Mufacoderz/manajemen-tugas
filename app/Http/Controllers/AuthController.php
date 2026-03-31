<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {

        return view('auth/login');
    }

    public function loginProses(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ],[

            'email.required' => 'email wajib diisi',
            'email.email' => 'email tidak valid',
            'password.required' => 'password wajib diisi',
            'password.min' => 'password minimal 8 karakter'
        ]);

        $data = array(
            'email' => $request->email,
            'password' => $request->password
        );

        if(Auth::attempt($data)){
            return redirect()->route('dashboard')->with('success', 'Anda berhasil login');
        } else {
            return redirect()->back()->with('error', 'Email atau password salah');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Anda berhasil logout');
    }

}
