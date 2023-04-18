<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PeminjamanController extends Controller
{
    public function index(Request $request){
       $keyword = $request->input('query');   
       $peminjamans = Peminjaman::when($keyword, function ($query, $keyword) {
            return $query->where(function ($query) use ($keyword) {
                 $query->where('isbn', 'like', "%$keyword%")
                       ->orWhere('judul', 'like', "%$keyword%")
                       ->orWhere('denda', 'like', "%$keyword%")
                       ->orWhere('kode_pinjam', 'like', "%$keyword%")
                       ->orWhere('kembali_asli', 'like', "%$keyword%")
                       ->orWhere('kembali', 'like', "%$keyword%")
                       ->orWhere('pinjam', 'like', "%$keyword%")
                       ->orWhere('name', 'like', "%$keyword%")
                       ->orWhere('nip_nis', 'like', "%$keyword%")
                       ->orWhere('kode_rfid', 'like', "%$keyword%")
                       ->orWhere('status', 'like', "%$keyword%");
            });
         })
        ->paginate(5);
        $bukus = Buku::all();

        foreach ($peminjamans as $pinjam) {
            $kembali_asli = $pinjam->kembali_asli;
            $kembali = $pinjam->kembali;

            // Hitung selisih hari antara pinjam dan kembali
            $selisih_hari = strtotime($kembali_asli) - strtotime($kembali);
            $denda = ceil($selisih_hari / (60 * 60 * 24));

            // Update status dan denda
            if ($denda >= 0) {
                $pinjam->telat = $denda;
                $pinjam->status = "Terlambat";
                $pinjam->denda = $denda * 1000;
            } else if($denda <= 0){
                if($kembali_asli != null) {
                    $pinjam->telat = $denda;
                    $pinjam->status = "Dikembalikan";
                    $pinjam->denda = 0;
                } else {
                    $pinjam->telat = $denda;
                    $pinjam->status = "Dipinjam";
                    $pinjam->denda = 0;
                }
            }

            // Simpan perubahan pada database
            $pinjam->save();
        }

        return view('pustakawan.pinjam.index', compact('peminjamans'));
    }

    public function create()
    {
    	$kategoris = Kategori::all();
        $bukus = Buku::all();
        $users = User::all();
        return view('pustakawan.pinjam.create', compact('kategoris', 'bukus', 'users'));
    }

    public function store(Request $request)
    {
       	$kode_pinjam = 'LBC' . Str::random(4);
        $request->validate([
            'kode_rfid' => 'required',
       		'nip_nis' => 'required',
			'name' => 'required',
			'judul' => 'required',
			'isbn' => 'required',
			'pinjam' => 'required',
			'kembali' => 'required',
			'kembali_asli' => 'nullable',
			'telat' => 'nullable',
			'denda' => 'nullable',
            'bayaran' => 'nullable',
			'status' => 'required',
        ]);

        Peminjaman::create([
            'kode_pinjam' => $kode_pinjam,
            'kode_rfid' => $request['kode_rfid'],
            'nip_nis' => $request['nip_nis'],
            'name' => $request['name'],
            'judul' => $request['judul'],
            'isbn' => $request['isbn'],
            'pinjam' => $request['pinjam'],
            'kembali' => $request['kembali'],
            'kembali_asli' => $request['kembali_asli'],
            'telat' => $request['telat'],
            'denda' => $request['denda'],
            'bayaran' => $request['bayaran'],
            'status' => $request['status'],
        ]);

        return redirect('/peminjaman')->with('message', 'Data Berhasil Ditambahkan'); 
    }

    public function show()
    {
        //
    }

 
    public function edit(Peminjaman $peminjaman)
    {
        $kategoris = Kategori::all();
        $bukus = Buku::all();
        $users = User::all();
        return view('pustakawan.pinjam.edit', compact('peminjaman', 'kategoris', 'bukus', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        $kode_pinjam = 'LBC' . Str::random(4);
       	$request->validate([
            'kode_rfid' => 'required',
       		'nip_nis' => 'required',
			'name' => 'required',
			'judul' => 'required',
			'isbn' => 'required',
			'pinjam' => 'required',
			'kembali' => 'required',
			'kembali_asli' => 'nullable',
			'telat' => 'nullable',
			'denda' => 'nullable',
            'bayaran' => 'nullable',
			'status' => 'required',
        ]);       

        Peminjaman::where('id', $request['id'])->update([
            'kode_pinjam' => $kode_pinjam,
            'kode_rfid' => $request['kode_rfid'],
            'nip_nis' => $request['nip_nis'],
            'name' => $request['name'],
            'judul' => $request['judul'],
            'isbn' => $request['isbn'],
            'pinjam' => $request['pinjam'],
            'kembali' => $request['kembali'],
            'kembali_asli' => $request['kembali_asli'],
            'telat' => $request['telat'],
            'denda' => $request['denda'],
            'bayaran' => $request['bayaran'],
            'status' => $request['status'],
        ]);
        
        return redirect('/peminjaman')->with('message', 'Data Berhasil Diedit'); 
    }

    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();

        return redirect('/peminjaman')->with('message', 'Data Berhasil Dihapus'); 
    }
}
