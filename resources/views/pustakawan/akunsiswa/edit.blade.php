@extends('layouts.app')

@section('title', 'Data Siswa')

@section('content')
<div class="container">
    <a href="/akunsiswa" class="btn btn-primary mb-3">Kembali</a>

    <form action="{{ route('akunsiswa.update', $akunsiswa->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="hidden" name="id" class="form-control" value="{{ $akunsiswa->id }}">
        <div class="form-group">
            <label for="">NIS</label>
            <input type="text" class="form-control" name="nip_nis" placeholder="NIS Jika Kosong Isi -" value="{{ $akunsiswa->nip_nis }}">
        </div>
        @error('nip_nis')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Kode RFID</label>
            <input type="text" class="form-control" name="kode_rfid" placeholder="Kode RFID" value="{{ $akunsiswa->kode_rfid }}">
        </div>
        @error('kode_rfid')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Gambar</label>
            <br>
            <img src="/img/userprofile/{{ $akunsiswa->image }}" alt="" class="img-fluid" width="20%">
            <input type="hidden" name="imageLama" value="{{ $akunsiswa->image }}">
            <input type="file" class="form-control" name="image" placeholder="Gambar">
        </div>

        @error('image')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="name" placeholder="Nama" value="{{ $akunsiswa->name }}">
        </div>
        @error('name')
            <small style="color: red">{{ $message }}</small>
        @enderror


        <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <select type="text" class="form-control" name="jk" placeholder="jenis Kelamin">
                <option value="{{ $akunsiswa->jk }}">{{ $akunsiswa->jk }}</option>
                <option value="Laki - laki">Laki - laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        @error('jk')
            <small style="color: red">{{ $message }}</small>
        @enderror

        
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $akunsiswa->email }}">
        </div>
        @error('email')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" value="{{ $akunsiswa->password }}">
        </div>
        @error('password')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Kelas</label>
            <input type="text" class="form-control" name="kelas" placeholder="Kelas" value="{{ $akunsiswa->kelas }}">
        </div>
        @error('kelas')
            <small style="color: red">{{ $message }}</small>
        @enderror


        <div class="form-group">
            <label for="">Telepon</label>
            <input type="number" class="form-control" name="telepon" placeholder="Telepon" value="{{ $akunsiswa->telepon }}">
        </div>
        @error('telepon')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Alamat</label>
            <textarea class="form-control" name="alamat" placeholder="Alamat">{{ $akunsiswa->alamat }}</textarea>
        </div>
        @error('alamat')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Status</label>
            <select class="form-control" name="status" placeholder="Status">
                <option value="{{ $akunsiswa->status }}">{{ $akunsiswa->status }}</option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
        </div>

        @error('status')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Role ID</label>
            <input class="form-control" name="role_id" id="role_id" value="{{ $akunsiswa->role_id }}" readonly="">
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
