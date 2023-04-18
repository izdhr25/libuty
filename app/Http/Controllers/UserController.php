<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Kunjungan;
use App\Models\Denda;
use App\Models\Kontak;
use App\Models\Buku;
use App\Models\User;
use App\Models\Berita;
use App\Models\Peminjaman;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index(){
    	$bukus = Buku::all();
        $peminjamans = Peminjaman::where('kode_rfid', Auth::user()->kode_rfid)->get();
        $murids = User::where('id', Auth::user()->id)->get();
        $kunjungans = Kunjungan::where('kode_rfid', Auth::user()->kode_rfid)->get();
        $kontak = Kontak::all();

        return view('siswa.index', compact('bukus', 'peminjamans', 'murids', 'kunjungans', 'kontak'));
    }

    public function pinjam(){
    	$bukus = Buku::all();
        $peminjamans = Peminjaman::where('kode_rfid', Auth::user()->kode_rfid)->paginate(10);
        $murids = User::where('id', Auth::user()->id)->get();
        $kunjungans = Kunjungan::where('kode_rfid', Auth::user()->kode_rfid)->get();
        $kontak = Kontak::all();

    	return view('siswa.pinjam', compact('bukus', 'peminjamans', 'murids', 'kunjungans', 'kontak'));
    }

    public function user(Request $request, User $user){
    	$bukus = Buku::all();
        $peminjamans = Peminjaman::where('kode_rfid', Auth::user()->kode_rfid)->get();
        $murids = User::where('id', Auth::user()->id)->get();
        $kunjungans = Kunjungan::where('kode_rfid', Auth::user()->kode_rfid)->get();
        $kontak = Kontak::all();

    	return view('siswa.user', compact('bukus', 'peminjamans', 'murids', 'kunjungans', 'kontak', 'user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'nip_nis' => 'string',
            'kode_rfid' => 'string',
            'image' => 'image',
            'name' => 'string',
            'jk' => 'string',
            'email' => ['string', 'email', 'max:255'],
            'password' => 'string',
            'kelas' => 'nullable',
            'telepon' => 'string',
            'alamat' => 'string',
            'status' => 'string',
            'role_id' => 'string',
        ]);       

        $input = $request->all();

        if($image = $request->file('image')){
            $imageName = $image->getClientOriginalName();
            $tujuan_upload = 'img/userprofile';
            $image->move($tujuan_upload, $imageName);
        } else {
            unset($request['image']);
        }  

        $password = $request->password;

        if($image && $password == null) {
                User::where('id', Auth::user()->id)->update([
                    'nip_nis' => $request['nip_nis'],
                    'kode_rfid'=> $request['kode_rfid'],
                    'image' => $request['imageLama'],
                    'name' => $request['name'],
                    'jk' => $request['jk'],
                    'email' => $request['email'],
                    'password' => $request['password'],
                    'kelas' => $request['kelas'],
                    'telepon' => $request['telepon'],
                    'alamat' => $request['alamat'],
                    'status' => $request['status'],
                    'role_id' => $request['role_id'],
            ]);
        } else if($image == null && $password != null){
                User::where('id', Auth::user()->id)->update([
                    'nip_nis' => $request['nip_nis'],
                    'kode_rfid'=> $request['kode_rfid'],
                    'image' => $request['imageLama'],
                    'name' => $request['name'],
                    'jk' => $request['jk'],
                    'email' => $request['email'],
                    'password' => bcrypt($request['password']),
                    'kelas' => $request['kelas'],
                    'telepon' => $request['telepon'],
                    'alamat' => $request['alamat'],
                    'status' => $request['status'],
                    'role_id' => $request['role_id'],
            ]);
        } else {
            User::where('id', Auth::user()->id)->update([
                    'nip_nis' => $request['nip_nis'],
                    'kode_rfid'=> $request['kode_rfid'],
                    'image' => $imageName,
                    'name' => $request['name'],
                    'jk' => $request['jk'],
                    'email' => $request['email'],
                    'password' => bcrypt($request['password']),
                    'kelas' => $request['kelas'],
                    'telepon' => $request['telepon'],
                    'alamat' => $request['alamat'],
                    'status' => $request['status'],
                    'role_id' => $request['role_id'],
            ]);
        }

        return redirect('/user')->with('message', 'Data Berhasil Diedit'); 
    }

    public function dendad(){
    	$bukus = Buku::all();
        $peminjamans = Peminjaman::where('kode_rfid', Auth::user()->kode_rfid)->get();
        $murids = User::where('id', Auth::user()->id)->get();
        $kunjungans = Kunjungan::where('kode_rfid', Auth::user()->kode_rfid)->get();
        $kontak = Kontak::all();
        $dendas = Peminjaman::where('nip_nis', Auth::user()->nip_nis)->where('status', 'Terlambat')->paginate(5);

    	return view('siswa.denda', compact('bukus', 'peminjamans', 'murids', 'kunjungans', 'kontak', 'dendas'));
    }

    public function kunjungad(){
    	$bukus = Buku::all();
        $peminjamans = Peminjaman::where('kode_rfid', Auth::user()->kode_rfid)->get();
        $murids = User::where('id', Auth::user()->id)->get();
        $kunjungans = Kunjungan::where('kode_rfid', Auth::user()->kode_rfid)->paginate(5);
        $kontak = Kontak::all();

    	return view('siswa.kunjungan', compact('bukus', 'peminjamans', 'murids', 'kunjungans', 'kontak'));
    }
}
