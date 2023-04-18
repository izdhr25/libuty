@extends('layouts.front')

@section('title', 'Libuty | Berita Terkini')

@section('content')


    <br><br><br>

    <div class="container-fluid my-5">
        
            <h3 class="text-center">Berita Terkini</h3>
            <center>
                <hr style="background: black; height: 5px; width: 100px; border-radius: 10%" class="mb-5">
            </center>   
            <div class="container"> 
                <div class="row">
                    <h2>{{ $berita->judul }}</h2>
                    <p class="mb-2">Rilis : {{ $berita->tgl_tulis }}</p>
                    <div class="col-lg-5">
                        <center><img src="/img/berita/{{ $berita->image }}" class="img-fluid" width="100%"></center>
                    </div>
                    
                    <div class="col-lg-7" style="color: black; text-align: justify;">
                        Penulis : <p class="mb-3">{{ $berita->penulis }}</p>
                        {!! $berita->deskripsi !!}
                    </div>

                    <div class="col-lg-12 mt-3">
                        <div id="disqus_thread"></div>
                    </div>
                </div>
            </div>
            <br><br><br>
    </div>
    @endsection