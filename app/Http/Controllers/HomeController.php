<?php

namespace App\Http\Controllers;

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


class HomeController extends Controller
{
    public function index(){
        $bukus = Buku::all();
        $peminjamans = Peminjaman::all();
        $murids = User::where('role_id', '2')->get();
        $kunjungans = Kunjungan::all();
        $kontak = Kontak::all();

        $buku = count($bukus);
        $peminjaman = count($peminjamans);
        $murid = count($murids);
        $kunjungan = count($kunjungans);

        return view('tale/index', compact('buku', 'peminjaman', 'murid', 'kunjungan', 'kontak', 'bukus'));
    }

    public function profil(){
        $bukus = Buku::all();
        $peminjamans = Peminjaman::all();
        $murids = User::where('role_id', '2')->get();
        $kunjungans = Kunjungan::all();
        $kontak = Kontak::all();


        $buku = count($bukus);
        $peminjaman = count($peminjamans);
        $murid = count($murids);
        $kunjungan = count($kunjungans);

        return view('tale/profil', compact('buku', 'peminjaman', 'murid', 'kunjungan', 'kontak'));
    }

    public function bukus(Request $request){
        $keyword = $request->input('query');
        $bukus = Buku::when($keyword, function ($query, $keyword) {
                    return $query->where(function ($query) use ($keyword) {
                         $query->where('isbn', 'like', "%$keyword%")
                               ->orWhere('judul', 'like', "%$keyword%")
                               ->orWhere('penerbit', 'like', "%$keyword%")
                               ->orWhere('penulis', 'like', "%$keyword%")
                               ->orWhere('halaman', 'like', "%$keyword%")
                               ->orWhere('kategori', 'like', "%$keyword%")
                               ->orWhere('edisi', 'like', "%$keyword%")
                               ->orWhere('tahun_terbit', 'like', "%$keyword%")
                               ->orWhere('status', 'like', "%$keyword%");
                    });
                 })
                ->paginate(12);

        $peminjamans = Peminjaman::all();
        $murids = User::where('role_id', '2')->get();
        $kunjungans = Kunjungan::all();
        $kontak = Kontak::all();


        $buku = count($bukus);
        $peminjaman = count($peminjamans);
        $murid = count($murids);
        $kunjungan = count($kunjungans);

        return view('tale/buku', compact('buku', 'peminjaman', 'murid', 'kunjungan', 'kontak', 'bukus'));
    }

    public function beritas(Request $request){
        $keyword = $request->input('query');
        $bukus = Buku::all();
        $peminjamans = Peminjaman::all();
        $murids = User::where('role_id', '2')->get();
        $kunjungans = Kunjungan::all();
        $kontak = Kontak::all();
        $beritas = Berita::when($keyword, function ($query, $keyword) {
                    return $query->where(function ($query) use ($keyword) {
                         $query->where('judul', 'like', "%$keyword%")
                               ->orWhere('tgl_tulis', 'like', "%$keyword%")
                               ->orWhere('penulis', 'like', "%$keyword%")
                               ->orWhere('deskripsi', 'like', "%$keyword%")
                               ->orWhere('kategori', 'like', "%$keyword%");
                    });
                 })
                ->paginate(12);


        $buku = count($bukus);
        $peminjaman = count($peminjamans);
        $murid = count($murids);
        $kunjungan = count($kunjungans);

        return view('tale/berita', compact('buku', 'peminjaman', 'murid', 'kunjungan', 'kontak', 'beritas'));
    }

    public function panduan(){
        $bukus = Buku::all();
        $peminjamans = Peminjaman::all();
        $murids = User::where('role_id', '2')->get();
        $kunjungans = Kunjungan::all();
        $kontak = Kontak::all();


        $buku = count($bukus);
        $peminjaman = count($peminjamans);
        $murid = count($murids);
        $kunjungan = count($kunjungans);

        return view('tale/panduan', compact('buku', 'peminjaman', 'murid', 'kunjungan', 'kontak'));
    }

    public function pustakawans(){
        $bukus = Buku::all();
        $peminjamans = Peminjaman::all();
        $murids = User::where('role_id', '2')->get();
        $kunjungans = Kunjungan::all();
        $kontak = Kontak::all();
        $akunpustakawans = User::where('role_id', '1')->paginate(12);

        $buku = count($bukus);
        $peminjaman = count($peminjamans);
        $murid = count($murids);
        $kunjungan = count($kunjungans);

        return view('tale/pustakawan', compact('buku', 'peminjaman', 'murid', 'kunjungan', 'kontak', 'akunpustakawans'));
    }

    public function peminjamans(Request $request){
        $keyword = $request->input('query');
        $bukus = Buku::all();
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
                       ->orWhere('status', 'like', "%$keyword%");
            });
         })
        ->paginate(12);


        $murids = User::where('role_id', '2')->get();
        $kunjungans = Kunjungan::all();
        $kontak = Kontak::all();

        $buku = count($bukus);
        $peminjaman = count($peminjamans);
        $murid = count($murids);
        $kunjungan = count($kunjungans);

        return view('tale/peminjaman', compact('buku', 'peminjaman', 'murid', 'kunjungan', 'kontak', 'peminjamans'));
    }

    public function faqs(){
        $bukus = Buku::all();
        $peminjamans = Peminjaman::all();
        $murids = User::where('role_id', '2')->get();
        $kunjungans = Kunjungan::all();
        $kontak = Kontak::all();

        $buku = count($bukus);
        $peminjaman = count($peminjamans);
        $murid = count($murids);
        $kunjungan = count($kunjungans);

        return view('tale/faqs', compact('buku', 'peminjaman', 'murid', 'kunjungan', 'kontak'));
    }

    public function bukusdetail($id){
        $kontak = Kontak::all();

        $decodedId = base64_decode($id);
        $buku = Buku::findOrFail($decodedId);

        return view('tale.detail_buku', compact('kontak', 'buku'));
    }

    public function beritadetail($id){
        $kontak = Kontak::all();
        $decodedId = base64_decode($id);
        $berita = Berita::findOrFail($decodedId);

        return view('tale/detail_berita', compact('kontak', 'berita'));
    }

}
