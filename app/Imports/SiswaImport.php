<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class SiswaImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new User([
            'nip_nis' => $row[0],
            'kode_rfid' => '0'.$row[1],
            'image' => $row[2],
            'name' => $row[3],
            'jk' => $row[4],
            'email' => $row[5],
            'password' => bcrypt($row[6]),
            'kelas' => $row[7],
            'telepon' => '0'.$row[8],
            'alamat' => $row[9],
            'status' => 'Active',
            'role_id' => '2',
    	]);
    }
}
