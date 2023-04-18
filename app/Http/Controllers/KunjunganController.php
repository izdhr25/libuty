<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use Illuminate\Http\Request;

class KunjunganController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('query');   
    	$kunjungans = Kunjungan::when($keyword, function ($query, $keyword) {
            return $query->where(function ($query) use ($keyword) {
                 $query->where('waktu', 'like', "%$keyword%")
                       ->orWhere('kode_rfid', 'like', "%$keyword%")
                       ->orWhere('nama', 'like', "%$keyword%")
                       ->orWhere('nis_nip', 'like', "%$keyword%")
                       ->orWhere('role_id', 'like', "%$keyword%");
            });
         })
        ->paginate(5);
        return view('pustakawan.kunjungan.index', compact('kunjungans'));
    }

    public function create()
    {
        return view('pustakawan.kunjungan.create');
    }

    public function store(Request $request)
    {
       	$request->validate([
       		'kode_rfid' => 'required',
       		'nis_nip' => 'required',
			'nama' => 'required',
			'waktu' => 'required',
			'role_id' => 'required',
        ]);

        $input = $request->all();

        Kunjungan::create($input);

        return redirect('/kunjungan')->with('message', 'Data Berhasil Ditambahkan'); 
    }

    public function show()
    {
        //
    }

 
    public function edit(Kunjungan $kunjungan)
    {
        return view('pustakawan.kunjungan.edit', compact('kunjungan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $services
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Kunjungan $kunjungan)
    {
       	$request->validate([
       		'kode_rfid' => 'string',
       		'nis_nip' => 'string',
			'nama' => 'string',
			'waktu' => 'string',
			'role_id' => 'string',
        ]);       

        $input = $request->all();

        $kunjungan->update($input);

        return redirect('/kunjungan')->with('message', 'Data Berhasil Diedit'); 
    }

    public function destroy(Kunjungan $kunjungan)
    {
        $kunjungan->delete();

        return redirect('/kunjungan')->with('message', 'Data Berhasil Dihapus'); 
    }
}
