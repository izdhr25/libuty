@extends('layouts.app')

@section('title', 'Data Kunjungan')

@section('content')
<div class="container">
    <a href="/kunjungan" class="btn btn-primary mb-3">Kembali</a>

    <form action="{{ route('kunjungan.update', $kunjungan->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">NIS</label>
            <input type="text" class="form-control" name="nis_nip" placeholder="NIS/NIP" value="{{ $kunjungan->nis_nip }}">
        </div>
        @error('nis_nip')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Kode RFID</label>
            <input type="text" class="form-control" name="kode_rfid" placeholder="Kode RFID" value="{{ $kunjungan->kode_rfid }}">
        </div>
        @error('kode_rfid')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $kunjungan->nama }}">
        </div>
        @error('nama')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Waktu</label>
            <input type="date" class="form-control" name="waktu" placeholder="Waktu" value="{{ $kunjungan->waktu }}">
        </div>
        @error('waktu')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Role ID</label>
            <input class="form-control" name="role_id" id="role_id" value="{{ $kunjungan->role_id }}" readonly="">
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