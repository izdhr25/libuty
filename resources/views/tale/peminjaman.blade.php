@extends('layouts.front')

@section('title', 'Libuty | Peminjaman')

@section('content')

<style type="text/css">
	.table-hover tbody tr:hover {
	  background-color: #f5f5f5;
	  color: #333;
	}

	.line-dec {
	  margin: 30px 0px 20px 0px;
	  width: 210px;
	  height: 2px;
	  background-color: #decdfa;
	}
</style>

<br><br><br><br><br>

	<div class="container mb-5 py-5">
		<h3 class="text-center">Riwayat Peminjaman Buku</h3>
		<center>
			<div class="line-dec"></div>
		</center>
        <form action="" method="GET">
          <div class="row mt-3">
              <div class="col-lg-11">
                  <input type="text" class="form-control" name="query" placeholder="Cari...">
              </div>
               <div class="col-lg-1">
                  <button type="submit" class="btn btn-primary" style="background:#5b03e4">Cari</button>
              </div>
          </div>
       </form>
		<table class="table table-hover">
		  <thead>
		    <tr>
			    <th scope="col" class="text-center">No</th>
			    <th scope="col" class="text-center">NIS</th>
			    <th scope="col" class="text-center">Nama</th>
			    <th scope="col" class="text-center">Judul Buku</th>
			    <th scope="col" class="text-center">ISBN</th>
			    <th scope="col" class="text-center">Tanggal Pinjam</th>
			    <th scope="col" class="text-center">Tanggal Kembali</th>
			    <th scope="col" class="text-center">Dikembalikan</th>
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
		      <th scope="row">{{ $i++ }}</th>
				<td class="text-center">{{ $peminjaman->nip_nis }}</td>
				<td>{{ $peminjaman->name }}</td>
				<td>{{ $peminjaman->judul }}</td>
				<td class="text-center">{{ $peminjaman->isbn }}</td>
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

@endsection