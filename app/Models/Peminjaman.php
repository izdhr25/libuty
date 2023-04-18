<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';

    protected $fillable = [
       'kode_pinjam',
       'kode_rfid',
  	   'nip_nis',
       'name',
       'judul',
       'isbn',
       'pinjam',
       'kembali',
       'kembali_asli',
       'telat',
       'denda',
       'bayaran',
       'status',
    ];


    public static function boot()
    {
        parent::boot();

        // Event `saving` dipanggil ketika model disimpan ke database
        static::saving(function ($model) {
           $kembali = Carbon::parse($model->kembali);
           $kembali_asli = Carbon::parse($model->kembali_asli);
           $sekarang = Carbon::now();
           $telat = $kembali->diffInDays($kembali_asli);
        });
    }

    public function hitungPinjamHari($kembali, $kembali_asli)
    {
        $diff = Carbon::parse($kembali)->diffInDays(Carbon::parse($kembali_asli));
        return $diff;
    }
}
