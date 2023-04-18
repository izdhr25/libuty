@extends('layouts.app')

@section('title', 'Data Buku')

@section('content')
<div class="container">
    <a href="/buku" class="btn btn-primary mb-3">Kembali</a>
    <form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="hidden" name="id" value="{{ $buku->id }}">
        <div class="form-group">
            <label for="">Gambar</label>
            <img src="/img/buku/{{ $buku->image }}" alt="" class="img-fluid" width="20%">
            <input type="hidden" name="imageLama" value="{{ $buku->image }}">
            <input type="file" class="form-control" name="image" placeholder="Gambar">
        </div>
        @error('image')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">QR Code</label>
            <input type="text" class="form-control" name="kode_qr" placeholder="QR Code" value="{{ $buku->kode_qr }}">
        </div>
        @error('kode_qr')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
           <label for="">Kategori</label>
            <select type="text" class="form-control" name="kategori" placeholder="Kategori">
                <option value="{{ $buku->kategori }}">{{ $buku->kategori }}</option>
                @foreach($kategoris as $kategori)
                <option value="{{ $kategori->kode_kategori }}">{{ $kategori->kode_kategori }} - {{ $kategori->nama }}</option>
                @endforeach
            </select>
        </div>
        @error('kategori')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Rak</label>
            <input type="text" class="form-control" name="rak" placeholder="Rak" value="{{ $buku->rak }}">
        </div>
        @error('rak')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">ISBN</label>
            <input type="text" class="form-control" name="isbn" placeholder="ISBN" value="{{ $buku->isbn }}">
        </div>
        @error('isbn')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Judul</label>
            <input type="text" class="form-control" name="judul" placeholder="Judul" value="{{ $buku->judul }}">
        </div>
        @error('judul')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Penerbit</label>
            <input type="text" class="form-control" name="penerbit" placeholder="Penerbit" value="{{ $buku->penerbit }}">
        </div>
        @error('penerbit')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Tahun Terbit</label>
            <input type="text" class="form-control" name="tahun_terbit" placeholder="Tahun Terbit" value="{{ $buku->tahun_terbit }}">
        </div>
        @error('tahun_terbit')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Penulis</label>
            <input type="text" class="form-control" name="penulis" placeholder="Penulis" value="{{ $buku->penulis }}">
        </div>
        @error('penulis')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Sinopsis</label>
            <textarea type="text" class="form-control ckeditor" id="content" name="sinopsis" placeholder="Sinopsis">{{ $buku->sinopsis }}</textarea>
        </div>
        @error('sinopsis')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Halaman</label>
            <input type="text" class="form-control" name="halaman" placeholder="Halaman" value="{{ $buku->halaman }}">
        </div>
        @error('halaman')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Edisi</label>
            <input type="text" class="form-control" name="edisi" placeholder="Edisi" value="{{ $buku->edisi }}">
        </div>
        @error('edisi')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Status</label>
            <select class="form-control" name="status" placeholder="Status">
                <option value="{{ $buku->status }}">{{ $buku->status }}</option>
                <option value="Tersedia">Tersedia</option>
                <option value="Tidak Tersedia">Tidak Tersedia</option>
            </select>
        </div>
        @error('status')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">
                Submit
            </button>
        </div>
    </form>
</div>
@endsection