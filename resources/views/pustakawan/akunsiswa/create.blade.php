@extends('layouts.app')

@section('title', 'Data Siswa')

@section('content')
<div class="container">
    <a href="/akunsiswa" class="btn btn-primary mb-3">Kembali</a>

    <form action="{{ route('akunsiswa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">NIS</label>
            <input required type="text" class="form-control" name="nip_nis" placeholder="NIS">
        </div>
        @error('nip_nis')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Kode RFID</label>
            <input required type="text" class="form-control" name="kode_rfid" placeholder="Kode RFID">
        </div>
        @error('kode_rfid')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Gambar</label>
            <br>
            <input required type="file" class="form-control" name="image" placeholder="Gambar">
        </div>

        @error('image')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Nama</label>
            <input required type="text" class="form-control" name="name" placeholder="Nama">
        </div>
        @error('name')
            <small style="color: red">{{ $message }}</small>
        @enderror


        <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <select type="text" class="form-control" name="jk" placeholder="Jenis Kelamin">
                <option value="Laki - laki">Laki - laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        @error('jk')
            <small style="color: red">{{ $message }}</small>
        @enderror

        
        <div class="form-group">
            <label for="">Email</label>
            <input required type="email" class="form-control" name="email" placeholder="Email">
        </div>
        @error('email')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Password</label>
            <input required type="password" class="form-control" name="password" placeholder="Password">
        </div>
        @error('password')
            <small style="color: red">{{ $message }}</small>
        @enderror


        <div class="form-group">
            <label for="">Kelas</label>
            <input required type="text" class="form-control" name="kelas" placeholder="Kelas">
        </div>
        @error('kelas')
            <small style="color: red">{{ $message }}</small>
        @enderror


        <div class="form-group">
            <label for="">Telepon</label>
            <input required type="number" class="form-control" name="telepon" placeholder="Telepon">
        </div>
        @error('telepon')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Alamat</label>
            <textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
        </div>
        @error('alamat')
            <small style="color: red">{{ $message }}</small>
        @enderror
        <div class="form-group">
            <label for="">Status</label>
            <select class="form-control" name="status" placeholder="Status">
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
        </div>

        @error('status')
            <small style="color: red">{{ $message }}</small>
        @enderror

        @error('status')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Role ID</label>
            <input required class="form-control" name="role_id" id="role_id" value="2" readonly="">
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
