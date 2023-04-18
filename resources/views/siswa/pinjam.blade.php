@extends('layouts.front')

@section('title', 'Libuty | Siswa/i - Peminjaman')

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
					<div class="col-lg-2">
						<center><a href="/feelate" class="btn">Denda</a></center>
					</div>
					<div class="col-lg-2" style="background: #5b03e4">
						<center><a href="/borrow" class="btn text-white">Peminjaman</a></center>
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
			                    <th class="text-center">Status</th>  
			              
			                </tr>
			            </thead>

			            <tbody>
			            @php
			                $i = 1;
			            @endphp
			            @foreach($peminjamans as $peminjaman)
			                <tr>
			                    <td>{{ $i++ }}</td>
			                    <td class="text-center">{{ $peminjaman->kode_pinjam }}</td>
			                    <td>{{ $peminjaman->name }}</td>
			                    <td>{{ $peminjaman->judul }}</td>
			                    <td>{{ $peminjaman->isbn }}</td>
			                    <td class="text-center">{{ $peminjaman->pinjam }}</td>
			                    <td class="text-center">{{ $peminjaman->kembali }}</td>
			                    <td class="text-center">{{ $peminjaman->kembali_asli }}</td>
			                    <td class="text-center">{{ $peminjaman->telat }}</td>
			                    <td class="text-center">{{ $peminjaman->denda }}</td>
			                    <td class="text-center">{{ $peminjaman->status }}</td>
			  
			                </tr>
			                @endforeach
			            </tbody>
			        </table>
			        <div class="d-flex">
			            {{ $peminjamans->links() }}
			        </div>
			    </div>
			</div>
		</div>
	</div>	
@endsection