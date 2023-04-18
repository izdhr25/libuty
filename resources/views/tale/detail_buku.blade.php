@extends('layouts.front')

@section('title', 'Libuty | Detail Buku')

@section('content')


	<br><br><br>

	<div class="container-fluid my-5">
		
			<h3 class="text-center">Detail Buku</h3>
			<center>
				<hr style="background: black; height: 5px; width: 100px; border-radius: 10%" class="mb-5">
			</center>	
			<div class="container">	
				<div class="row">
					<h2 class="">{{ $buku->judul }}</h2>
					<h5 class="mb-5">{{ $buku->penulis }}</h5>
					<div class="col-lg-5">
						<center><img src="/img/buku/{{ $buku->image }}" class="img-fluid" width="100%"></center>
					</div>
					
					<div class="col-lg-7 my-auto">
						<h5 class="mb-2">Penerbit : {{ $buku->penerbit }}</h5>
						<h5 class="mb-2">Tahun Terbit : {{ $buku->tahun_terbit }}</h5>
						<h5 class="mb-2">Jumlah : {{ $buku->halaman }} Halaman</h5>
						<h5 class="mb-2">Sinopsis :</h5>
						<p>{!! $buku->sinopsis !!}</p>
					</div>

					<div class="col-lg-12 mt-3">
						<div id="disqus_thread"></div>
					</div>
				</div>
			</div>
			<br><br><br>
	</div>
	@endsection