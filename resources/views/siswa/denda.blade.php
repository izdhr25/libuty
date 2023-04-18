@extends('layouts.front')

@section('title', 'Libuty | Siswa/i - Denda')

@section('content')
<br><br><br><br>
	<div class="container mb-5 py-5">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-lg-2">
						<center><a href="/siswa" class="btn">Home</a></center>
					</div>
					<div class="col-lg-2">
						<center><a href="/user" class="btn">Akun</a></center>
					</div>
					<div class="col-lg-2" style="background: #5b03e4">
						<center><a href="/feelate" class="btn text-white">Denda</a></center>
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
				<div class="table-responsive my-3">
		        <table class="table table-hover table-stripped">
		            <thead>
		                <tr>
		                    <th>No</th>
		                    <th class="text-center">Kode Pinjam</th>
		                    <th class="text-center">Nama</th>
		                    <th class="text-center">Judul</th>
		                    <th class="text-center">ISBN</th>
		                    <th class="text-center">Pinjam</th>
		                    <th class="text-center">Kembali</th>
		                    <th class="text-center">Dikembalikan</th>
		                    <th class="text-center">Telat</th>
		                    <th class="text-center">Denda</th>
		                    <th class="text-center">Bayaran</th>
		                </tr>
		            </thead>

		            <tbody>
		            @php
		                $i = 1;
		            @endphp
		            @foreach($dendas as $denda)
		                <tr>
		                    <td>{{ $i++ }}</td>
		                    <td class="text-center">{{ $denda->kode_pinjam }}</td>
		                    <td>{{ $denda->name }}</td>
		                    <td>{{ $denda->judul }}</td>
		                    <td>{{ $denda->isbn }}</td>
		                    <td class="text-center">{{ $denda->pinjam }}</td>
		                    <td class="text-center">{{ $denda->kembali }}</td>
		                    <td class="text-center">{{ $denda->kembali_asli }}</td>
		                    <td class="text-center">{{ $denda->telat }}</td>
		                    <td class="text-center">{{ $denda->denda }}</td>
		                    <td class="text-center">{{ $denda->bayaran }}</td>
		                </tr>
		                @endforeach
		            </tbody>
		        </table>
		        <div class="d-flex">
		            {{ $dendas->links() }}
   			 </div>
			</div>
		</div>
	</div>	
@endsection