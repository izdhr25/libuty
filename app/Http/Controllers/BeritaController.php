<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    use ValidatesRequests;

    public function index(Request $request)
    {
        $keyword = $request->input('query');
        $beritas = Berita::when($keyword, function ($query, $keyword) {
                    return $query->where(function ($query) use ($keyword) {
                         $query->where('judul', 'like', "%$keyword%")
                               ->orWhere('tgl_tulis', 'like', "%$keyword%")
                               ->orWhere('penulis', 'like', "%$keyword%")
                               ->orWhere('deskripsi', 'like', "%$keyword%")
                               ->orWhere('kategori', 'like', "%$keyword%");
                    });
                 })
                ->paginate(5);
        return view('pustakawan.berita.index', compact('beritas'));
    }

    public function create()
    {
        $kategoriberitas = KategoriBerita::all();
        return view('pustakawan.berita.create', compact('kategoriberitas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tgl_tulis' => 'required',
            'penulis' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'image' => 'image',
        ]);

        $input = $request->all();

        if($image = $request->file('image')){
            $imageName = $image->getClientOriginalName();
            $tujuan_upload = 'img/berita';
            $image->move($tujuan_upload, $imageName);
        } 
        
        Berita::create([
            'judul' => $request['judul'],
            'penulis' => $request['penulis'],
            'tgl_tulis' => $request['tgl_tulis'],
            'deskripsi'=> $request['deskripsi'],
            'kategori' => $request['kategori'],
            'image' => $imageName,
        ]);

        return redirect('/berita')->with('message', 'Data Berhasil Ditambahkan'); 
    }

    public function show(Berita $berita)
    {
        //
    }

 
    public function edit(Berita $berita)
    {
        $kategoriberitas = KategoriBerita::all();
        return view('pustakawan.berita.edit', compact('berita', 'kategoriberitas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul' => 'string',
            'tgl_tulis' => 'string',
            'penulis' => 'string',
            'deskripsi' => 'string',
            'kategori' => 'string',
            'image' => 'image',
        ]);

        $input = $request->all();

        if($image = $request->file('image')){
            $destinationPath = '/img/berita';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }
         
        if($image == null) {
                Buku::where('id', $request['id'])->update([
                'judul' => $request['judul'],
                'penulis' => $request['penulis'],
                'tgl_tulis' => $request['tgl_tulis'],
                'deskripsi'=> $request['deskripsi'],
                'kategori' => $request['kategori'],
                'image' => $request['imageLama'],
                ]);
        } else {
                Buku::where('id', $request['id'])->update([
                    'judul' => $request['judul'],
                    'penulis' => $request['penulis'],
                    'tgl_tulis' => $request['tgl_tulis'],
                    'deskripsi'=> $request['deskripsi'],
                    'kategori' => $request['kategori'],
                    'image' => $imageName,
                ]);
        }

        return redirect('/berita')->with('message', 'Data Berhasil Diedit'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $id)
    {
        $id->delete();

        return redirect('/berita')->with('message', 'Data Berhasil Dihapus'); 
    }
}