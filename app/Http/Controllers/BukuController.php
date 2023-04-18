<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(Request $request){
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
                ->paginate(5);

        foreach ($bukus as $book) {
            if($book->id != null){
                $peminjamans = Peminjaman::where('kembali_asli', null)->get();
                foreach ($peminjamans as $pinjam) {
                    $isbn = $pinjam->isbn;
                    $buku = Buku::where('isbn', $isbn)->first();

                    if ($buku) {
                        $buku->status = 'Dipinjam';
                    } else {
                        $buku->status = 'Tersedia';
                    }
                    $buku->save();
                }

                $pengembalians = Peminjaman::whereNotNull('kembali_asli')->get();
                foreach ($pengembalians as $kembali) {
                    $isbn = $kembali->isbn;
                    $buku = Buku::where('isbn', $isbn)->first();

                    if ($buku) {
                        $buku->status = 'Tersedia';
                    } else {
                        $buku->status = 'Dipinjam';
                    }
                    $buku->save();
                }
            }
        }

        return view('pustakawan.buku.index', compact('bukus'));
    }

    public function create()
    {
    	$kategoris = Kategori::all();
        return view('pustakawan.buku.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'image',
            'kode_qr' => 'required',
            'kategori' => 'required',
		    'rak' => 'required',
		    'isbn' => 'required',
		    'judul' => 'required',
		    'penerbit' => 'required',
		    'tahun_terbit' => 'required',
		    'penulis' => 'required',
		    'sinopsis' => 'required',
		    'halaman' => 'required',
		    'edisi' => 'required',
		    'status' => 'required',
        ]);       

        if($image = $request->file('image')){
            $imageName = $image->getClientOriginalName();
            $tujuan_upload = 'img/buku';
            $image->move($tujuan_upload, $imageName);
        } else {
            $imageName = 'buku.jpg';
        }  
        
        Buku::create([
            'image' => $imageName,
            'kode_qr' => $request['kode_qr'],
            'kategori' => $request['kategori'],
            'rak' => $request['rak'],
            'isbn' => $request['isbn'],
            'judul' => $request['judul'],
            'penerbit' => $request['penerbit'],
            'tahun_terbit' => $request['tahun_terbit'],
            'penulis' => $request['penulis'],
            'sinopsis' => $request['sinopsis'],
            'halaman' => $request['halaman'],
            'edisi' => $request['edisi'],
            'status' => $request['status'],
        ]);
        

        return redirect('/buku')->with('message', 'Data Berhasil Diedit'); 
    }

    public function show()
    {
        //
    }

 
    public function edit(Buku $buku)
    {
        $kategoris = Kategori::all();
        return view('pustakawan.buku.edit', compact('buku', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'id' => 'string',
            'image' => 'image',
            'kode_qr' => 'string',
            'kategori' => 'string',
		    'rak' => 'string',
		    'isbn' => 'string',
		    'judul' => 'string',
		    'penerbit' => 'string',
		    'tahun_terbit' => 'string',
		    'penulis' => 'string',
		    'sinopsis' => 'string',
		    'halaman' => 'string',
		    'edisi' => 'string',
		    'status' => 'string',
        ]);       

        if($image = $request->file('image')){
            $imageName = $image->getClientOriginalName();
            $tujuan_upload = 'img/buku';
            $image->move($tujuan_upload, $imageName);
        } else {
            unset($request['image']);
        }  

        if($image == null) {
                Buku::where('id', $request['id'])->update([
                    'image' => $request['imageLama'],
    	            'kode_qr' => $request['kode_qr'],
    	            'kategori' => $request['kategori'],
    			    'rak' => $request['rak'],
    			    'isbn' => $request['isbn'],
    			    'judul' => $request['judul'],
    			    'penerbit' => $request['penerbit'],
    			    'tahun_terbit' => $request['tahun_terbit'],
    			    'penulis' => $request['penulis'],
    			    'sinopsis' => $request['sinopsis'],
    			    'halaman' => $request['halaman'],
    			    'edisi' => $request['edisi'],
    			    'status' => $request['status'],
                ]);
        } else {
                Buku::where('id', $request['id'])->update([
                    'image' => $imageName,
    	            'kode_qr' => $request['kode_qr'],
    	            'kategori' => $request['kategori'],
    			    'rak' => $request['rak'],
    			    'isbn' => $request['isbn'],
    			    'judul' => $request['judul'],
    			    'penerbit' => $request['penerbit'],
    			    'tahun_terbit' => $request['tahun_terbit'],
    			    'penulis' => $request['penulis'],
    			    'sinopsis' => $request['sinopsis'],
    			    'halaman' => $request['halaman'],
    			    'edisi' => $request['edisi'],
    			    'status' => $request['status'],
                ]);
        }

        return redirect('/buku')->with('message', 'Data Berhasil Diedit'); 
    }

    public function destroy(Buku $buku)
    {
        $buku->delete();

        return redirect('/buku')->with('message', 'Data Berhasil Dihapus'); 
    }
}
