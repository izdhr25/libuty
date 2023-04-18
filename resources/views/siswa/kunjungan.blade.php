@extends('layouts.front')

@section('title', 'Libuty | Siswa/i - Kunjungan')

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
					<div class="col-lg-2">
						<center><a href="/borrow" class="btn">Peminjaman</a></center>
					</div>
					<div class="col-lg-2" style="background: #5b03e4">
						<center><a href="/kunjung" class="btn text-white">Kunjungan</a></center>
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
			                    <th class="text-center">Kode RFID</th>
			                    <th class="text-center">NIS</th>
			                    <th class="text-center">Nama</th>
			                    <th class="text-center">Waktu</th>
			                    <th class="text-center">Role ID</th> 
			                </tr>
			            </thead>

			            <tbody>
			                @php
			                    $i = 1;
			                @endphp
			                @foreach($kunjungans as $kunjungan)
			                <tr>
			                    <td>{{ $i++ }}</td>
			                    <td class="text-center">{{ $kunjungan->kode_rfid }}</td>
			                    <td class="text-center">{{ $kunjungan->nis_nip }}</td>
			                    <td>{{ $kunjungan->nama }}</td>
			                    <td class="text-center">{{ $kunjungan->waktu }}</td>
			                    <td class="text-center">{{ $kunjungan->role_id }}</td>
			                </tr>
			                @endforeach
			            </tbody>
			        </table>
			        <div class="d-flex">
			            {{ $kunjungans->links() }}
			        </div>
			    </div>
			</div>
		</div>
	</div>	
@endsection