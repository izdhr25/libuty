<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kontak;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kontak::create([
            'LogoDash' => 'libutyberwarna.png',
            'LogoWeb' => 'libutyputihnoslogan.png',
            'telepon' => '087868191540',
            'fax' => '(021) 82597121',
            'website' => 'https://web.smkn2kotabekasi.sch.id/',
            'instagram' => 'https://www.instagram.com/smkn2.kotabks/',
            'youtube' => 'https://www.youtube.com/c/SMKN2KOTABEKASI',
            'email' => 'smknduakotabekasi@gmail.com',
            'alamat' => 'Jl. Lap. Bola Rw. Butun, RT.001/RW.006, Ciketing Udik, Kec. Bantar Gebang, Kota Bks, Jawa Barat 17153',
        ]);

    }
}
