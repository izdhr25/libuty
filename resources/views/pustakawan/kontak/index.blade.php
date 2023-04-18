@extends('layouts.app')

@section('title', 'Data Kontak Website')

@section('content')
<div class="container-fluid">
    
    @if($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{ $message }}</p>
        </div>
    @endif

    @php
        $i = 1;
    @endphp
    @foreach($kontaks as $kontak)
        <form method="POST" action="{{ route('kontak.update', $kontak->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
            <div class="form-group">
                <input type="hidden" name="id" value="{{ $kontak->id }}" class="form-control">
                <div class="form-group">
                    <label for="">Logo Halaman Admin</label>
                    <div class="bg bg-white">
                        <img src="/img/logo/{{ $kontak->LogoDash }}" alt="" class="img-fluid" width="50%">
                    </div>
                    <input type="hidden" class="form-control" name="imageLamaDash" placeholder="Gambar" value="{{ $kontak->LogoDash }}">
                    <input type="file" class="form-control" name="LogoDash" placeholder="Gambar">
                </div>

                <div class="form-group">
                    <label for="">Logo Halaman Web</label>
                    <div class="bg bg-secondary">
                        <img src="/img/logo/{{ $kontak->LogoWeb }}" alt="" class="img-fluid" width="50%">
                    </div>
                    <input type="hidden" class="form-control" name="imageLamaWeb" placeholder="Gambar" value="{{ $kontak->LogoWeb }}">
                    <input type="file" class="form-control" name="LogoWeb" placeholder="Gambar">
                </div>

                <div class="form-group">
                    <label for="">Instagram</label>
                    <input type="text" class="form-control" name="instagram" placeholder="Instagram" value="{{ $kontak->instagram }}">
                </div>
                @error('instagram')
                    <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group mt-2">
                    <label for="">Telepon/Whatsapp</label>
                    <input type="text" class="form-control" name="telepon" placeholder="Whatsapp" value="{{ $kontak->telepon }}">
                </div>
                @error('whatsapp')
                    <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $kontak->email }}">
                </div>
                @error('email')
                    <small style="color: red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea id="body" class="form-control ckeditor" id="content" name="alamat" placeholder="Alamat">{{ $kontak->alamat }}</textarea>
                </div>
                @error('alamat')
                    <small style="color: red">{{ $message }}</small>
                @enderror

                <button type="submit" class="btn btn-warning form-control text-white">Edit</button>
            </div>
        </form>
    @endforeach
@endsection