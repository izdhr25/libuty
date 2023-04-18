<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';

    protected $fillable = [
	  	'image',
	    'kode_qr',
	    'kategori',
	    'rak',
	    'isbn',
	    'judul',
	    'penerbit',
	    'tahun_terbit',
	    'penulis',
	    'sinopsis',
	    'halaman',
	    'edisi',
	    'status',
    ];
}
