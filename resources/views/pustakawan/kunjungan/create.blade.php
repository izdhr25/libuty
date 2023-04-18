@extends('layouts.app')

@section('title', 'Data Kunjungan')

@section('content')
<div class="container">
    <a href="/kunjungan" class="btn btn-primary mb-3">Kembali</a>

    <form action="{{ route('kunjungan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">NIS</label>
            <input type="text" class="form-control" name="nis_nip" placeholder="NIS/NIP">
        </div>
        @error('nis_nip')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Kode RFID</label>
            <input type="text" class="form-control" name="kode_rfid" placeholder="Kode RFID">
        </div>
        @error('kode_rfid')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama">
        </div>
        @error('nama')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Waktu</label>
            <input type="date" class="form-control" name="waktu" placeholder="Waktu" id="waktu">
        </div>
        @error('waktu')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Role ID</label>
            <select class="form-control" name="role_id" placeholder="Role ID">
                <option value="1">Pustakawan</option>
                <option value="2">Siswa/i</option>
            </select>
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