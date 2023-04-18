@extends('layouts.app')

@section('title', 'Data Berita')

@section('content')
<div class="container">
    <a href="/berita/create" class="btn btn-primary mb-3">Tambah Data</a>
    
    @if($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{ $message }}</p>
        </div>
    @endif

    <input type="button" value="Cetak" onclick="printPage()" class="btn btn-primary mb-3"/>

    <form action="" method="GET">
        <div class="row">
            <div class="col-lg-11">
                <input type="text" class="form-control" name="query" placeholder="Cari...">
            </div>
             <div class="col-lg-1">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </div>
    </form>

    <div class="table-responsive my-3">
        <table class="table table-hover table-stripped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Judul</th>
                    <th class="text-center">Kategori</th>
                    <th class="text-center">Tgl Tulis</th>
                    <th class="text-center">Penulis</th>
                    <th class="text-center">Deskripsi</th>
                    <th class="text-center">Gambar</th> 
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach($beritas as $berita)
                <tr>
                    <input type="hidden" name="id" value="{{ $berita->id }}">
                    <td>{{ $i++ }}</td>
                    <td>{{ $berita->judul }}</td>
                    <td>{{ $berita->kategori }}</td>
                    <td>{{ $berita->tgl_tulis }}</td>
                    <td>{{ $berita->penulis }}</td>
                    <td>{!! Str::limit($berita->deskripsi, 50, '...') !!}</td>
                    <td><center><img src="/img/berita/{{ $berita->image }}" width="50%"></center></td>
                    <td>
                        <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-warning btn-sm text-white">Edit</a>
                        <form method="POST" action="{{ route('berita.destroy', $berita->id )}}">
                        @method('DELETE')
                        @csrf    
                            <button type="submit" class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex">
            {{ $beritas->links() }}
        </div>
    </div>
</div>
@endsection

<script>
   function printPage() {
      window.print();
   }
</script>