@extends('layouts.app')

@section('title', 'Data Berita')

@section('content')
<div class="container">
    <a href="/berita" class="btn btn-primary mb-3">Kembali</a>
    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Judul</label>
            <input type="text" class="form-control" name="judul" placeholder="Judul" value="{{ $berita->judul }}">
        </div>
        @error('judul')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Tanggal Tulis</label>
            <input type="date" class="form-control" name="tgl_tulis" id="" cols="30" rows="10" placeholder="Tanggal Tulis" value="{{ $berita->tgl_tulis }}">
        </div>

        @error('tgl_tulis')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Penulis</label>
            <input type="text" class="form-control" name="penulis" placeholder="Penulis" value="{{ $berita->penulis }}">
        </div>

        @error('penulis')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea type="text" class="form-control ckeditor" id="content" name="deskripsi" placeholder="Deskripsi">{{ $berita->deskripsi }}</textarea>
        </div>

        @error('deskripsi')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Kategori</label>
            <select name="kategori" class="form-control">
                <option value="{{ $berita->kategori }}">{{ $berita->kategori }}</option>

                @foreach($kategoriberitas as $kategoriberita)
                <option value="{{ $berita->kategoriberita }}">{{ $berita->kategoriberita }}</option>
                @endforeach
            </select>
        </div>

        @error('kategori')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Gambar</label>
            <img src="/img/berita/{{ $berita->image }}" alt="" class="img-fluid" width="90">
            <input type="hidden" name="imageLama" value="{{ $berita->image }}">
            <input type="file" class="form-control" name="image" placeholder="Gambar">
        </div>

        @error('image')
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