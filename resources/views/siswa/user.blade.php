@extends('layouts.front')

@section('title', 'Libuty | Siswa/i - Akun')

@section('content')
<br><br><br><br>
	<div class="container mb-5 py-5">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-lg-2">
						<center><a href="/siswa" class="btn">Home</a></center>
					</div>
					<div class="col-lg-2" style="background: #5b03e4">
						<center><a href="/user" class="btn text-white">Akun</a></center>
					</div>
					<div class="col-lg-2">
						<center><a href="/feelate" class="btn">Denda</a></center>
					</div>
					<div class="col-lg-2">
						<center><a href="/borrow" class="btn">Peminjaman</a></center>
					</div>
					<div class="col-lg-2">
						<center><a href="/kunjung" class="btn">Kunjungan</a></center>
					</div>
					<div class="col-lg-2">
						<center><a href="/logout" class="btn">Logout</a></center>
					</div>
				</div>
			</div>
			<div class="card-body">
				@php
					$user = Auth::user();
				@endphp
				<div class="row">
					<div class="col-lg-4">
						<img src="/img/userprofile/{{ Auth::user()->image }}">
					</div>
					<div class="col-lg-8">
						<h2>Akun Siswa/i</h2>
						<form action="user/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data">
				        @csrf
				        <div class="form-group my-3">
				            <label for="">NIS</label>
				            <input type="text" class="form-control" name="nip_nis" placeholder="NIS Jika Kosong Isi -" value="{{ $user->nip_nis }}">
				        </div>
				        @error('nip_nis')
				            <small style="color: red">{{ $message }}</small>
				        @enderror

				        <div class="form-group my-3">
				            <label for="">Kode RFID</label>
				            <input type="text" class="form-control" name="kode_rfid" placeholder="Kode RFID" value="{{ $user->kode_rfid }}">
				        </div>
				        @error('kode_rfid')
				            <small style="color: red">{{ $message }}</small>
				        @enderror

				        <div class="form-group my-3">
				            <label for="">Gambar</label>
				            <input type="hidden" name="imageLama" value="{{ $user->image }}">
				            <input type="file" class="form-control" name="image" placeholder="Gambar">
				        </div>

				        @error('image')
				            <small style="color: red">{{ $message }}</small>
				        @enderror

				        <div class="form-group my-3">
				            <label for="">Nama</label>
				            <input type="text" class="form-control" name="name" placeholder="Nama" value="{{ $user->name }}">
				        </div>
				        @error('name')
				            <small style="color: red">{{ $message }}</small>
				        @enderror


				        <div class="form-group my-3">
				            <label for="">Jenis Kelamin</label>
				            <select type="text" class="form-control" name="jk" placeholder="jenis Kelamin">
				                <option value="{{ $user->jk }}">{{ $user->jk }}</option>
				                <option value="Laki - laki">Laki - laki</option>
				                <option value="Perempuan">Perempuan</option>
				            </select>
				        </div>
				        @error('jk')
				            <small style="color: red">{{ $message }}</small>
				        @enderror

				        
				        <div class="form-group my-3">
				            <label for="">Email</label>
				            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $user->email }}">
				        </div>
				        @error('email')
				            <small style="color: red">{{ $message }}</small>
				        @enderror

				        <div class="form-group my-3">
				            <label for="">Password</label>
				            <input type="password" class="form-control" name="password" placeholder="Password" value="{{ $user->password }}">
				        </div>
				        @error('password')
				            <small style="color: red">{{ $message }}</small>
				        @enderror

				        <div class="form-group my-3">
				            <label for="">Kelas</label>
				            <input type="text" class="form-control" name="kelas" placeholder="Kelas" value="{{ $user->kelas }}">
				        </div>
				        @error('kelas')
				            <small style="color: red">{{ $message }}</small>
				        @enderror


				        <div class="form-group my-3">
				            <label for="">Telepon</label>
				            <input type="number" class="form-control" name="telepon" placeholder="Telepon" value="{{ $user->telepon }}">
				        </div>
				        @error('telepon')
				            <small style="color: red">{{ $message }}</small>
				        @enderror

				        <div class="form-group my-3">
				            <label for="">Alamat</label>
				            <textarea class="form-control" name="alamat" placeholder="Alamat">{{ $user->alamat }}</textarea>
				        </div>
				        @error('alamat')
				            <small style="color: red">{{ $message }}</small>
				        @enderror

				        <div class="form-group my-3">
				            <label for="">Status</label>
				            <select class="form-control" name="status" placeholder="Status">
				                <option value="{{ $user->status }}">{{ $user->status }}</option>
				                <option value="Active">Active</option>
				                <option value="Inactive">Inactive</option>
				            </select>
				        </div>

				        @error('status')
				            <small style="color: red">{{ $message }}</small>
				        @enderror
				            <input type="hidden" class="form-control" name="role_id" id="role_id" value="{{ $user->role_id }}" readonly="">
	

				        @error('role_id')
				            <small style="color: red">{{ $message }}</small>
				        @enderror

				        <div class="form-group my-3">
				            <button type="submit" class="btn btn-primary btn-block">
				                Submit
				            </button>
				        </div>
				    </form>
					</div>
				</div>
			</div>
		</div>
	</div>	
@endsection