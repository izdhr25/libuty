<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Kunjungan;
use App\Models\Denda;
use App\Models\Buku;
use App\Models\User;
use App\Models\Peminjaman;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index(Request $request){
        $bukus = Buku::all();
        $peminjamans = Peminjaman::all();
        $murids = User::where('role_id', '2')->get();
        $kunjungans = Kunjungan::all();

        $buku = count($bukus);
        $peminjaman = count($peminjamans);
        $murid = count($murids);
        $kunjungan = count($kunjungans);

        return view('pustakawan.index', compact('buku', 'peminjaman', 'murid', 'kunjungan'));
    }

    public function store(Request $request){
    	$kode_rfid = $request['kode_rfid'];
    	$waktu = Carbon::now();
    	$user = User::where('kode_rfid', $kode_rfid)->first();

    	if($user) {
    		$nis_nip = $user->nip_nis;
		    $kode_rfid = $user->kode_rfid;
		    $nama = $user->name;
		    $role_id = $user->role_id;

    		Kunjungan::create([
	    		'kode_rfid' => $kode_rfid,
	    		'nis_nip' => $nis_nip,
	    		'nama' => $nama,
	    		'waktu' => $waktu,
	    		'role_id' => $role_id,
    		]);
    	} else {
    		echo "<script>
                alert('Data Pengguna Tidak Ditemukan Silakan Daftarkan Pengguna');
                window.location.href='/pustakawan';
            </script>";
    	}

    	return redirect('/pustakawan');
    }

    public function storePinjam(Request $request){
    	$kode_rfid = $request['kode_rfid'];
        $kode_pinjam = 'LBC' . Str::random(4);
    	$isbn = $request['isbn'];
    	$kembali = $request['kembali'];
    	$pinjam = Carbon::now();
    	$status = 'Dipinjam';

    	$user = User::where('kode_rfid', $kode_rfid)->first();
    	$buku = Buku::where('isbn', $isbn)->first();

        if(isset($user) && isset($buku)) {
            $nip_nis = $user['nip_nis'];
            $name = $user['name'];
            $judul = $buku['judul'];
            $isbn = $buku['isbn'];
        } else {
            echo "<script>
                alert('Data Buku atau Pengguna Tidak Ditemukan');
                window.location.href='/pustakawan';
            </script>";
            
        }

    	Peminjaman::create([
            'kode_pinjam' => $kode_pinjam,
            'kode_rfid' => $kode_rfid,
    		'nip_nis' => $nip_nis,
			'name' => $name,
			'judul' => $judul,
			'isbn' => $isbn,
			'pinjam' => $pinjam,
			'kembali' => $kembali,
			'status' => $status,
    	]);

    	return redirect('/pustakawan');
    }

    public function storeDenda(Request $request){
    	$kode_rfid = $request['kode_rfid'];
        $isbn = $request['isbn'];
        $bayaran = 'Denda Lunas';   

        $peminjaman = Peminjaman::where('isbn', $isbn)->first();

        Peminjaman::where('isbn', $isbn)
            ->update([
                'bayaran' => $bayaran,
            ]);

    	return redirect('/pustakawan');
    }

    public function storeKembali(Request $request){
        $kode_rfid = $request['kode_rfid'];
        $isbn = $request['isbn'];
        $kembali_asli = Carbon::now();   

        $peminjaman = Peminjaman::where('isbn', $isbn)->first();

        Peminjaman::where('isbn', $isbn)
            ->update([
                'kembali_asli' => $kembali_asli,
            ]);

        return redirect('/pustakawan');
    }


}
