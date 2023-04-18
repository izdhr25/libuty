@extends('layouts.app')

@section('title', 'Data Pustakawan')

@section('content')
<div class="container-fluid">
    <a href="/akunpustakawan/create" class="btn btn-primary mb-3">Tambah Data</a>
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
            <form method="POST" action="{{ route('akunpustakawan.import') }}" enctype="multipart/form-data">
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

    <div class="alert alert-info d-flex align-items-center" role="alert">
      <i class="fa-solid fa-circle-exclamation mr-3"></i>
      <div>
        Role ID = 1 (Pustakawan)
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
                    <th class="text-center">NIP/NIS</th>
                    <th class="text-center">Kode RFID</th>  <th class="text-center">Gambar</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Telepon</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>

                @php
                    $i = 1;
                @endphp
                @foreach($akunpustakawans as $akunpustakawan)
                <tr>
                    <td class="text-center">{{ $i++ }}</td>
                    <td class="text-center">{{ $akunpustakawan->nip_nis }}</td>
                    <td class="text-center">{{ $akunpustakawan->kode_rfid }}</td>
                    <td class="text-center"><img src="/img/userprofile/{{ $akunpustakawan->image }}" class="img-fluid" width="50%"></td>
                    <td>{{ $akunpustakawan->name }}</td>
                    <td class="text-center">{{ $akunpustakawan->jk }}</td>
                    <td>{{ $akunpustakawan->email }}</td>
                    <td>{{ $akunpustakawan->telepon }}</td>
                    <td>{{ $akunpustakawan->alamat }}</td>
                    <td>{{ $akunpustakawan->status }}</td>
                    <td class="text-center">
                        <a href="{{ route('akunpustakawan.edit', $akunpustakawan->id) }}" class="btn btn-warning btn-sm text-white">Edit</a>
                        <form method="POST" action="{{ route('akunpustakawan.destroy', $akunpustakawan->id) }}">
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
        {{ $akunpustakawans->links() }}
      </div>
    </div>
</div>
@endsection

<script>
   function printPage() {
      window.print();
   }
</script>