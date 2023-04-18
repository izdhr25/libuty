@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-book-open"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Daftar Buku</span>
              <span class="info-box-number">
                {{ $buku }}
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-red elevation-1"><i class="fas fa-hand-holding"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Peminjaman</span>
              <span class="info-box-number">{{ $peminjaman }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Murid</span>
              <span class="info-box-number">{{ $murid }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-purple elevation-1"><i class="fas fa-person-booth"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Kunjungan</span>
              <span class="info-box-number">{{ $kunjungan }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row my-5">
        @if($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{ $message }}</p>
        </div>
        @endif


        <div class="col-lg-6">
          <form method="POST" action="/pustakawan/pinjam">
              @csrf
              <label>Silakan Tap RFID dan Barcode untuk Peminjaman</label><br>
              <label>RFID</label>
              <input required type="number" name="kode_rfid" class="form-control mb-3">
              <label>ISBN</label>
              <input required type="text" name="isbn" class="form-control mb-3">
              <label>Kembali</label>
              <input required type="date" name="kembali" class="form-control mb-3">
              <button type="submit" class="btn btn-primary my-3">Simpan</button>
          </form>
        </div> 

        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
               <form method="POST" action="/pustakawan/kunjungan">
              @csrf
                <label>Tap RFID Untuk Kunjungan</label>
                <input type="numbber" name="kode_rfid" class="form-control">
                <button type="submit" class="btn btn-primary my-3">Simpan</button>
              </form>
            </div>

            <div class="col-lg-12">
                <form method="POST" action="/pustakawan/denda">
                @csrf
                  <label>Masukan ISBN Untuk Bayar Denda</label>
                  <input type="text" name="isbn" class="form-control">
                  <button type="submit" class="btn btn-primary my-3">Simpan</button>
              </form>
            </div>

            <div class="col-lg-12">
                <form method="POST" action="/pustakawan/kembali">
                @csrf
                  <label>Masukan ISBN Untuk Mengembalikan Buku</label>
                  <input type="text" name="isbn" class="form-control">
                  <button type="submit" class="btn btn-primary my-3">Simpan</button>
              </form>
            </div>
          </div>
        </div> 
      </div>
    </div><!--/. container-fluid -->
@endsection