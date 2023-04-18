<?php

namespace App\Http\Controllers;

use App\Http\Models\Buku;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index(){
        return view('pustakawan.tentang.index');
    }
}
