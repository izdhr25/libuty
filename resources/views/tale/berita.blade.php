@extends('layouts.front')

@section('title', 'Libuty | Berita')

@section('content')
<br>
  <div class="projects section" id="projects">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2 class="text-center">Berita Terkini</h2>
            <center><div class="line-dec"></div></center>
            <p class="text-center">Libuty memuat berita dari sumber terpercaya.</p>

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
      <div class="row">
        @foreach($beritas as $berita)
        <div class="col-lg-3">
        	<div class="item">
              <img src="/img/berita/{{ $berita->image }}" alt="">
              <div class="down-content">
                <h4>{{ $berita->judul }}</h4>
                <a href="{{ route('beritas.detail', base64_encode($berita->id)) }}"><i class="fa fa-circle-info"></i></a>
              </div>
          	</div>
        </div>
        @endforeach
      </div>

      <div class="d-flex">
        {{ $beritas->links() }}
      </div>
    </div>
  </div>

@endsection