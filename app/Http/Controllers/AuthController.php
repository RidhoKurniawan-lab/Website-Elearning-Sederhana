<?php

namespace App\Http\Controllers;

// use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('success', 'Selamat datang di E-Learning!');
        }

        return back()->with('error', 'Akun kamu tidak ditemukan.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken(); 

        return redirect('/')->with('success', 'Kamu telah berhasil keluar.');
    }
}
