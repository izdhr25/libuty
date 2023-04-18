<?php

namespace App\Imports;

use App\Models\Kunjungan;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Carbon\Carbon;
use DateTime;

class KunjunganImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        $waktu = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[3]));


        return new Kunjungan([
            'kode_rfid' => $row[0],
            'nis_nip' => $row[1],
            'nama' => $row[2],
            'waktu' => $waktu,
            'role_id' => $row[4],
    	]);
    }
}
