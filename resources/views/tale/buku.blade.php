@extends('layouts.front')

@section('title', 'Libuty | Buku')

@section('content')
<br>
  <div class="projects section" id="projects">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2 class="text-center">Kumpulan Buku</h2>
            <center><div class="line-dec"></div></center>
            <p class="text-center">Libuty memiliki banyak koleksi buku dari berbagai kategori.</p>

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
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mb-5">
        @foreach($bukus as $buku)
        <div class="col-lg-3">
          <div class="item">
            <img src="/img/buku/{{ $buku->image }}" alt="" height="400px">
            <div class="down-content">
              <h4>
                {!! Str::limit($buku->judul, 20, '...') !!}
              </h4>
              <a href="{{ route('bukus.detail', base64_encode($buku->id)) }}"><i class="fa fa-circle-info"></i></a>
            </div>
          </div>  
        </div>
        @endforeach
      </div>

      <div class="d-flex">
        {{ $bukus->links() }}
      </div>
    </div>
  </div>

@endsection