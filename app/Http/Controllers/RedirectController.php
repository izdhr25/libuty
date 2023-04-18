<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RedirectController extends Controller
{
    public function cek() {
        if (auth()->user()->role_id === 1) {
            return redirect()->route('pustakawan');
        } else if(auth()->user()->role_id === 2) {
            return redirect()->route('siswa');
        } else {
        	return redirect('/');
        }
    }
}
