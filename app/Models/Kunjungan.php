<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;
    protected $table = 'kunjungan';

    protected $fillable = [
      'kode_rfid',
      'nis_nip',
      'nama',
      'waktu',
      'role_id',
    ];
}
