<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nip_nis' => '202110340',
            'kode_rfid' => '202110340',
            'image' => 'profile.jpg',
            'name' => 'Izdihar Fazrianti',
            'jk' => 'Perempuan',
            'email' => 'izdihar0825@gmail.com',
            'password' => Hash::make('05062004'),
            'telepon' => '087868191540',
            'alamat' => 'GAS',
            'status' => 'Active',
            'role_id' => '2',
        ]);

        User::create([
            'nip_nis' => '20231741',
            'kode_rfid' => '20231741',
            'image' => 'profile2.jpg',
            'name' => 'Admin',
            'jk' => 'Laki - laki',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'telepon' => '087868191540',
            'alamat' => 'Butun',
            'status' => 'Active',
            'role_id' => '1',
        ]);

    }
}
