@extends('layouts.front')

@section('title', 'Libuty | Siswa/i - Home')

@section('content')
<br><br><br><br>
	<div class="container mb-5 py-5">
		<div class="card">
		<div class="card-header">
				<div class="row">
					<div class="col-lg-2" style="background: #5b03e4">
						<center><a href="/siswa" class="btn text-white">Home</a></center>
					</div>
					<div class="col-lg-2">
						<center><a href="/user" class="btn">Akun</a></center>
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
				<br><br><br>
				<center><h3 class="fw-bold">Selamat Datang {{ Auth::user()->name }} <br> Di Library Butun City</h3></center>
				<br><br><br>
			</div>
		</div>
	</div>	
@endsection