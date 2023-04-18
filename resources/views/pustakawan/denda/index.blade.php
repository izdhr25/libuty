@extends('layouts.app')

@section('title', 'Data Denda')

@section('content')
<div class="container-fluid">
    <a href="/denda/create" class="btn btn-primary mb-3">Tambah Data</a>
    <input type="button" value="Cetak" onclick="printPage()" class="btn btn-primary mb-3"/>
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

    <div class="alert alert-info d-flex align-items-center" role="alert">
      <i class="fa-solid fa-circle-exclamation mr-3"></i>
      <div>
        Jika telat mengembalikan buku dikenakan Denda <b>Rp. 1000/hari</b>
      </div>
    </div>

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
@endsection

<script>
   function printPage() {
      window.print();
   }
</script>