<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
use App\Imports\SiswaImport;

class SiswaExcelController extends Controller
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
		$file->move('import/siswa',$nama_file);
 
		// import data
		Excel::import(new SiswaImport, public_path('/import/siswa/'.$nama_file));

        return redirect()->back()->with('message', 'Import Excel Siswa');
    
	}
}
