<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Buku;
use App\Imports\BukuImport;
use App\Imports\BukuExport;

class BukuExcelController extends Controller
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
		$file->move('import/buku',$nama_file);
 
		// import data
		Excel::import(new BukuImport, public_path('/import/buku/'.$nama_file));

        return redirect()->back()->with('message', 'Import Excel Buku');
    
	}


}
