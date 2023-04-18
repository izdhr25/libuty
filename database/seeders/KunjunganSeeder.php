<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kunjungan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class KunjunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kunjungan::create([
            'kode_rfid' => '0750719908',
            'nis_nip' => '202110356',
            'nama' => 'Siti Miftahul Hikmah',
            'waktu' => Carbon::now(),
            'role_id' => '2',
        ]);

    }
}
