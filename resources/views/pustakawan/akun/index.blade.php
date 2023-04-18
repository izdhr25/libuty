@extends('layouts.app')

@section('title', 'Data Akun')

@section('content')
 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
  
        @if($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{ $message }}</p>
	    </div>
	    @endif
        <form action="{{ route('akun.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Gambar</label>
            <br>
            <img src="/img/userprofile/{{ Auth::user()->image }}" alt="" class="img-fluid" width="20%">
            <input type="hidden" name="imageLama" value="{{ Auth::user()->image }}">
            <input type="file" class="form-control" name="image" placeholder="Gambar">
        </div>

        @error('image')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Kode RFID</label>
            <input type="text" class="form-control" name="kode_rfid" placeholder="Kode RFID" value="{{ Auth::user()->kode_rfid }}">
        </div>
        @error('kode_rfid')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="name" placeholder="Nama" value="{{ Auth::user()->name }}">
        </div>
        @error('name')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">NIP</label>
            <input type="text" class="form-control" name="nip_nis" placeholder="NIP" value="{{ Auth::user()->nip_nis }}">
        </div>
        @error('nip_nis')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <select type="text" class="form-control" name="jk" placeholder="jenis Kelamin">
                <option value="{{ Auth::user()->jk }}">{{ Auth::user()->jk }}</option>
                <option value="Laki - laki">Laki - laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        @error('jk')
            <small style="color: red">{{ $message }}</small>
        @enderror


        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ Auth::user()->email }}">
        </div>
        @error('email')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" value="{{ Auth::user()->password }}">
        </div>
        @error('password')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Telepon</label>
            <input type="number" class="form-control" name="telepon" placeholder="Telepon" value="{{ Auth::user()->telepon }}">
        </div>
        @error('no_telp')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Alamat</label>
            <textarea class="form-control" name="alamat" placeholder="Alamat">{{ Auth::user()->alamat }}</textarea>
        </div>
        @error('alamat')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label for="">Role ID</label>
            <input class="form-control" name="role_id" id="" cols="30" rows="10" value="{{ Auth::user()->role_id }}" readonly="">
        </div>

        @error('role_id')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <button type="submit" class="btn btn-warning btn-block text-white">
                Edit
            </button>
        </div>
        </form>
        
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection