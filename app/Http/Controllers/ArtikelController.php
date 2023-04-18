<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{

    public function index(Request $request)
    {
        $keyword = $request->input('query');
        $artikels = Artikel::where('judul', 'LIKE', '%'.$keyword.'%')
            ->orWhere('tgl_tulis', 'LIKE', '%'.$keyword.'%')
            ->orWhere('penulis', 'LIKE', '%'.$keyword.'%')
            ->orWhere('deskripsi', 'LIKE', '%'.$keyword.'%')
            ->paginate(5);

        return view('pustakawan.artikel.index', compact('artikels'));
    }

    public function create()
    {
        $kategoris = KategoriBerita::all();
        return view('pustakawan.artikel.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tgl_tulis' => 'required',
            'penulis' => 'required',
            'deskripsi' => 'required',
            'image' => 'image',
        ]);

        $input = $request->all();

        if($image = $request->file('image')){
            $destinationPath = 'img/berita';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Artikel::create($input);

        return redirect('/artikel')->with('message', 'Data Berhasil Ditambahkan'); 
    }

    public function show(Artikel $artikel)
    {
        //
    }

 
    public function edit(Artikel $artikel)
    {
        $kategoris = KategoriBerita::all();
        return view('pustakawan.artikel.edit', compact('artikel', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        $request->validate([
            'judul' => 'string',
            'tgl_tulis' => 'string',
            'penulis' => 'string',
            'deskripsi' => 'string',
            'image' => 'image',
        ]);

        $input = $request->all();

        if($image = $request->file('image')){
            $destinationPath = 'img/berita';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }
         
        $artikel->update($input);

        return redirect('/artikel')->with('message', 'Data Berhasil Diedit'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        $artikel->delete();

        return redirect('/artikel')->with('message', 'Data Berhasil Dihapus'); 
    }
}