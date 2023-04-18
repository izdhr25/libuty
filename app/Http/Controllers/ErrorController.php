<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class ErrorController extends Controller
{
    public function modelNotFound()
    {
    	$kontak = Kontak::all();
    	
        return view('errors.404', compact('kontak'));
    }
}
