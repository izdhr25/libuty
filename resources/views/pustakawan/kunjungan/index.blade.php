@extends('layouts.app')

@section('title', 'Data Kunjungan')

@section('content')
<div class="container-fluid">
    <a href="/kunjungan/create" class="btn btn-primary mb-3">Tambah Data</a>
    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#myModal">
        Import Excel
    </button>   

    <input type="button" value="Cetak" onclick="printPage()" class="btn btn-primary mb-3"/>
    @if($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{ $message }}</p>
        </div>
    @endif

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
            <form method="POST" action="{{ route('kunjungan.import') }}" enctype="multipart/form-data">
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
                    <th class="text-center">Kode RFID</th>
                    <th class="text-center">NIS</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Waktu</th>
                    <th class="text-center">Role ID</th> 
                    <th class="text-center">Aksi</th>
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
                    <td class="text-center">
                        <a href="{{ route('kunjungan.edit', $kunjungan->id) }}" class="btn btn-warning btn-sm text-white">Edit</a>
                        <form method="POST" action="{{ route('kunjungan.destroy', $kunjungan->id) }}">
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
            {{ $kunjungans->links() }}
        </div>
    </div>
</div>
@endsection

<script>
   function printPage() {
      window.print();
   }
</script>