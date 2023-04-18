@extends('layouts.app')

@section('title', 'Data Buku')

@section('content')
<div class="container">
    <a href="/buku" class="btn btn-primary mb-3">Kembali</a>
    <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Gambar</label>
            <input type="file" class="form-control" name="image" placeholder="Gambar">
        </div>
        @error('image')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">QR Code</label>
            <input required type="text" class="form-control" name="kode_qr" placeholder="QR Code">
        </div>
        @error('kode_qr')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
           <label for="">Kategori</label>
            <select type="text" class="form-control" name="kategori" placeholder="Kategori">
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
            <input required type="text" class="form-control" name="rak" placeholder="Rak">
        </div>
        @error('rak')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">ISBN</label>
            <input required type="text" class="form-control" name="isbn" placeholder="ISBN">
        </div>
        @error('isbn')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Judul</label>
            <input required type="text" class="form-control" name="judul" placeholder="Judul">
        </div>
        @error('judul')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Penerbit</label>
            <input required type="text" class="form-control" name="penerbit" placeholder="Penerbit">
        </div>
        @error('penerbit')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Tahun Terbit</label>
            <input required type="text" class="form-control" name="tahun_terbit" placeholder="Tahun Terbit">
        </div>
        @error('tahun_terbit')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Penulis</label>
            <input required type="text" class="form-control" name="penulis" placeholder="Penulis">
        </div>
        @error('penulis')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Sinopsis</label>
            <textarea type="text" class="form-control ckeditor" id="content" name="sinopsis" placeholder="Sinopsis"></textarea>
        </div>
        @error('sinopsis')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Halaman</label>
            <input required type="text" class="form-control" name="halaman" placeholder="Halaman">
        </div>
        @error('halaman')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Edisi</label>
            <input required type="text" class="form-control" name="edisi" placeholder="Edisi">
        </div>
        @error('edisi')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Status</label>
            <select class="form-control" name="status" placeholder="Status">
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