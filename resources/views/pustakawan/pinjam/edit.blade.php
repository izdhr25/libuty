@extends('layouts.app')

@section('title', 'Data Peminjaman')

@section('content')
<div class="container">
    <a href="/peminjaman" class="btn btn-primary mb-3">Kembali</a>
    <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="hidden" name="id" value="{{ $peminjaman->id }}" class="form-control">
        <div class="form-group">
            <label for="">Kode RFID</label>
            <select class="form-control" name="kode_rfid" placeholder="Kode RFID" id="kode_rfid">
                <option value="{{ $peminjaman->kode_rfid }}">{{ $peminjaman->kode_rfid }}</option>
                @foreach($users as $user)
                <option value="{{ $user->kode_rfid }}">{{ $user->kode_rfid }} - {{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        @error('kode_rfid')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">NIS</label>
            <select class="form-control" name="nip_nis" placeholder="NIS" id="nip_nis">
                <option value="{{ $peminjaman->nip_nis }}">{{ $peminjaman->nip_nis }}</option>
                @foreach($users as $user)
                <option value="{{ $user->nip_nis }}">{{ $user->nip_nis }} - {{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        @error('nip_nis')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Nama</label>
            <select class="form-control" name="name" placeholder="Nama" id="name">
                <option value="{{ $peminjaman->name }}">{{ $peminjaman->name }}</option>
                @foreach($users as $user)
                <option value="{{ $user->name }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        @error('name')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Judul</label>
            <select class="form-control" name="judul" placeholder="Judul" id="judul">
                <option value="{{ $peminjaman->judul }}">{{ $peminjaman->judul }}</option>
                @foreach($bukus as $buku)
                <option value="{{ $buku->judul }}">{{ $buku->judul }}</option>
                @endforeach
            </select>
        </div>
        @error('judul')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">ISBN</label>
            <select class="form-control" name="isbn" placeholder="ISBN" id="isbn">
                <option value="{{ $peminjaman->isbn }}">{{ $peminjaman->isbn }}</option>
                @foreach($bukus as $buku)
                <option value="{{ $buku->isbn }}">{{ $buku->isbn }} - {{ $buku->judul }}</option>
                @endforeach
            </select>
        </div>
        @error('isbn')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Pinjam</label>
            <input type="date" class="form-control" name="pinjam" placeholder="Pinjam" value="{{ $peminjaman->pinjam }}">
        </div>
        @error('pinjam')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Kembali</label>
            <input type="date" class="form-control" name="kembali" placeholder="Kembali" value="{{ $peminjaman->kembali }}">
        </div>
        @error('kembali')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Kembali Asli</label>
            <input type="date" class="form-control" name="kembali_asli" placeholder="Kembali Asli" value="{{ $peminjaman->kembali_asli }}">
        </div>
        @error('kembali_asli')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Telat</label>
            <input type="number" class="form-control" name="telat" placeholder="Telat" value="{{ $peminjaman->telat }}">
        </div>
        @error('telat')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Denda</label>
            <input type="text" class="form-control" name="denda" placeholder="Denda" value="{{ $peminjaman->denda }}">
        </div>
        @error('denda')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Status</label>
            <select class="form-control" name="status" placeholder="Status">
                <option value="{{ $peminjaman->status }}">{{ $peminjaman->status }}</option>
                <option value="Dipinjam">Dipinjam</option>
                <option value="Dikembalikan">Dikembalikan</option>
            </select>
        </div>
        @error('status')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Bayaran</label>
            <select class="form-control" name="bayaran" placeholder="Bayaran">
                <option value="{{ $peminjaman->bayaran }}">{{ $peminjaman->bayaran }}</option>
                <option value="Belum Lunas">Belum Lunas</option>
                <option value="Denda Lunas">Denda Lunas</option>
            </select>
        </div>
        @error('bayaran')
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