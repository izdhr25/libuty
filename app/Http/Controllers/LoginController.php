<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\Kontak;

class LoginController extends Controller
{
    public function login() {
        $kontak = Kontak::all();

        return view('tale.login', compact('kontak'));
    }

    public function dologin(Request $request) {
        // validasi
        $credentials = $request->validate([
            'email' => 'string|email',
            'password' => 'string',
        ]);

        if (Auth::attempt($credentials)) {
        // Jika berhasil login
            $user = Auth::user();
            if ($user->role_id == 1) {
                // Jika role_id adalah 1 (pustakawan), arahkan ke halaman pustakawan
                return redirect()->route('pustakawan');
            } elseif ($user->role_id == 2) {
                // Jika role_id adalah 2 (siswa), arahkan ke halaman siswa
                return redirect()->route('siswa');
            }
        } else {
            // Jika gagal login
            return redirect()->back()->withErrors(['email' => 'Email atau password salah']);
        }
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}