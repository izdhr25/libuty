<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Peminjaman;
use App\Imports\PeminjamanImport;

class PeminjamanExcelController extends Controller
{
    public function import(Request $request)
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = $file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('import/peminjaman',$nama_file);
 
		// import data
		Excel::import(new PeminjamanImport, public_path('/import/peminjaman/'.$nama_file));

        return redirect()->back()->with('message', 'Import Excel Peminjaman');
    
	}
}
