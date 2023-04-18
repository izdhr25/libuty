<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\Kontak;

class RFIDController extends Controller
{
    public function login() {
        $kontak = Kontak::all();

        return view('tale.rfid', compact('kontak'));
    }

    public function dologin(Request $request) {
        // validasi
        $credentials = $request->only('kode_rfid');

        if (Auth::attempt($credentials['kode_rfid'])) {
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
            return redirect()->back()->withErrors(['kode_rfid' => 'Belum terdaftar']);
        }
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
