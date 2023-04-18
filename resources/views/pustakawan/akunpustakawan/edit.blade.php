@extends('layouts.app')

@section('title', 'Data Pustakawan')

@section('content')
<div class="container">
    <a href="/akunpustakawan" class="btn btn-primary mb-3">Kembali</a>

    <form action="{{ route('akunpustakawan.update', $akunpustakawan->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="hidden" name="id" class="form-control" value="{{ $akunpustakawan->id }}">
        <div class="form-group">
            <label for="">NIP</label>
            <input type="text" class="form-control" name="nip_nis" placeholder="NIP Jika Kosong Isi -" value="{{ $akunpustakawan->nip_nis }}">
        </div>
        @error('nip_nis')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Kode RFID</label>
            <input type="text" class="form-control" name="kode_rfid" placeholder="Kode RFID" value="{{ $akunpustakawan->kode_rfid }}">
        </div>
        @error('kode_rfid')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Gambar</label>
            <br>
            <img src="/img/userprofile/{{ $akunpustakawan->image }}" alt="" class="img-fluid" width="20%">
            <input type="hidden" name="imageLama" value="{{ $akunpustakawan->image }}">
            <input type="file" class="form-control" name="image" placeholder="Gambar">
        </div>

        @error('image')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="name" placeholder="Nama" value="{{ $akunpustakawan->name }}">
        </div>
        @error('name')
            <small style="color: red">{{ $message }}</small>
        @enderror


        <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <select type="text" class="form-control" name="jk" placeholder="jenis Kelamin">
                <option value="{{ $akunpustakawan->jk }}">{{ $akunpustakawan->jk }}</option>
                <option value="Laki - laki">Laki - laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        @error('jk')
            <small style="color: red">{{ $message }}</small>
        @enderror

        
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $akunpustakawan->email }}">
        </div>
        @error('email')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" value="{{ $akunpustakawan->password }}">
        </div>
        @error('password')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Kelas</label>
            <input type="text" class="form-control" name="kelas" placeholder="Kelas" value="{{ $akunpustakawan->kelas }}">
        </div>
        @error('kelas')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Telepon</label>
            <input type="number" class="form-control" name="telepon" placeholder="Telepon" value="{{ $akunpustakawan->telepon }}">
        </div>
        @error('telepon')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Alamat</label>
            <textarea class="form-control" name="alamat" placeholder="Alamat">{{ $akunpustakawan->alamat }}</textarea>
        </div>
        @error('alamat')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Status</label>
            <select class="form-control" name="status" placeholder="Status">
                <option value="{{ $akunpustakawan->status }}">{{ $akunpustakawan->status }}</option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
        </div>

        @error('status')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Role ID</label>
            <input class="form-control" name="role_id" id="role_id" value="{{ $akunpustakawan->role_id }}" readonly="">
        </div>

        @error('role_id')
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
