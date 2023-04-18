<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Denda extends Model
{
    use HasFactory;
    protected $table = 'denda';

    protected $fillable = [
  	   'nip_nis',
       'name',
       'judul',
       'isbn',
       'pinjam',
       'kembali',
       'kembali_asli',
       'telat',
       'denda',
       'status',
       'bayaran',
    ];
}
