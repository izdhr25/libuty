<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;


class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kode_pinjam = 'LBC' . Str::random(4);

        Peminjaman::create([
            'kode_pinjam' => $kode_pinjam,
            'kode_rfid' => '202110356',
            'nip_nis' => '202110356',
            'name' => 'Siti Miftahul Hikmah',
            'judul' => 'Daily Dose of Light',
            'isbn' => '9786020631738',
            'pinjam' => Carbon::now(),
            'kembali' => Carbon::now(),
            'kembali_asli' => null,
            'status' => 'Dipinjam',
        ]);

    }
}
