<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Melakukan proses login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika login berhasil, alihkan ke halaman yang sesuai
            return redirect()->intended('/dashboard');
        }

        // Jika login gagal, alihkan kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        // Logout pengguna
        auth()->logout();

        // Invalidate session dan mengarahkan pengguna ke halaman login
        $request->session()->invalidate();

        // Mengarahkan pengguna ke halaman login dengan pesan logout berhasil
        return redirect('login')->with('success', 'Anda telah berhasil logout.');
    }
}
