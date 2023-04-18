<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Denda;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class DendaController extends Controller
{
    public function index(){
        $dendas = Peminjaman::where('status', 'Terlambat')->paginate(5);
        return view('pustakawan.denda.index', compact('dendas'));
    }

}
