@extends('layouts.app')

@section('title', 'Data Buku')

@section('content')
<div class="container-fluid">
    <a href="/buku/create" class="btn btn-primary mb-3">Tambah Data</a>
    <input type="button" value="Cetak" onclick="printPage()" class="btn btn-primary mb-3"/>
    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#myModal">
        Import Excel
    </button>   

    <!-- The Modal -->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Masukan File</h4>
            <button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form method="POST" action="{{ route('import') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="file">Upload file:</label>
                    <input type="file" name="file" id="file" class="form-control">
                </div>
                <div>
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    @if($message = Session::get('message'))
    <div class="alert alert-success">
        <strong>Berhasil</strong>
        <p>{{ $message }}</p>
    </div>
    @endif
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
                    <th>No</th>
                    <th class="text-center">Gambar</th>
                    <th class="text-center">ISBN/Code QR</th>
                    <th class="text-center">Kategori</th>
                    <th class="text-center">Rak</th>
                    <th class="text-center">Judul</th>
                    <th class="text-center">Penerbit</th>
                    <th class="text-center">Terbit</th>
                    <th class="text-center">Pegarang</th>
                    <th class="text-center">Sinopsis</th>
                    <th class="text-center">Halaman</th>
                    <th class="text-center">Edisi</th>
                    <th class="text-center">Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
            @php
                $i = 1;
            @endphp
            @foreach($bukus as $buku)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td class="text-center"><img src="img/buku/{{ $buku->image }}" class="img-fluid"></td>
                    <td class="text-center">{{ $buku->isbn }}</td>
                    <td class="text-center">{{ $buku->kategori }}</td>
                    <td class="text-center">{{ $buku->rak }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penerbit }}</td>
                    <td class="text-center">{{ $buku->tahun_terbit }}</td>
                    <td class="text-center">{{ $buku->penulis }}</td>
                    <td>{!! Str::limit($buku->sinopsis, 20, '...') !!}</td>
                    <td class="text-center">{{ $buku->halaman }}</td>
                    <td class="text-center">{{ $buku->edisi }}</td>
                    <td class="text-center">{{ $buku->status }}</td>
                    <td class="text-center">
                    	<a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-warning btn-sm text-white">Edit</a>
                        <form method="POST" action="{{ route('buku.destroy', $buku->id) }}">
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
            {{ $bukus->links() }}
        </div>
    </div>
</div>

@endsection

<script>
   function printPage() {
      window.print();
   }
</script>