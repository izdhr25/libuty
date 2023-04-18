<?php

namespace App\Imports;

use App\Models\Buku;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class BukuImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Buku([
            'image' => $row[0],
            'kode_qr' => $row[1],
            'kategori' => $row[2],
            'rak' => $row[3],
            'isbn' => $row[4],
            'judul' => $row[5],
            'penerbit' => $row[6],
            'tahun_terbit' => $row[7],
            'penulis' => $row[8],
            'sinopsis' => $row[9],
            'halaman' => $row[10],
            'edisi' => $row[11],
            'status' => 'Tersedia',
    	]);
    }

}
