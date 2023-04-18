<?php

namespace App\Imports;

use App\Models\Peminjaman;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class PeminjamanImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        $pinjam = intval($row[6]);
        $kembali = intval($row[7]);
        $kembali_asli = intval($row[8]);

        $kode_pinjam = 'LBC' . Str::random(4);
        return new Peminjaman([
            'kode_pinjam' => $kode_pinjam,
            'kode_rfid' => $row[1],
            'nip_nis' => $row[2],
            'name' => $row[3],
            'judul' => $row[4],
            'isbn' => $row[5],
            'pinjam' => ExcelDate::excelToDateTimeObject($pinjam)->format('Y-m-d'),
            'kembali' => ExcelDate::excelToDateTimeObject($kembali)->format('Y-m-d'),
            'kembali_asli' => ExcelDate::excelToDateTimeObject($kembali_asli)->format('Y-m-d'),
            'telat' => $row[9],
            'denda' => $row[10],
            'status' => $row[11],
            'bayaran' => '',
    	]);
    }
}