@extends('layouts.front')

@section('title', 'Libuty | Panduan')

@section('content')

<br><br><br>
<style type="text/css">
  .line-dec {
    margin: 30px 0px 20px 0px;
    width: 210px;
    height: 2px;
    background-color: #decdfa;
  }
  .timeline {
    list-style: none;
    padding: 20px 0 20px;
    position: relative;
    z-index: 9999;
  }
  .timeline:before {
    top: 0;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 3px;
    background-color: #eeeeee;
    left: 50%;
    margin-left: -1.5px;
  }
  .timeline > li {
    margin-bottom: 20px;
    position: relative;
  }
  .timeline > li:before,
  .timeline > li:after {
    content: " ";
    display: table;
  }
  .timeline > li:after {
    clear: both;
  }
  .timeline > li:before,
  .timeline > li:after {
    content: " ";
    display: table;
  }
  .timeline > li:after {
    clear: both;
  }
  .timeline > li > .timeline-panel {
    width: 46%;
    float: left;
    border: 1px solid #d4d4d4;
    border-radius: 2px;
    padding: 20px;
    position: relative;
    -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
    box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  }
  .timeline > li > .timeline-panel:before {
    position: absolute;
    top: 26px;
    right: -15px;
    display: inline-block;
    border-top: 15px solid transparent;
    border-left: 15px solid #ccc;
    border-right: 0 solid #ccc;
    border-bottom: 15px solid transparent;
    content: " ";
  }
  .timeline > li > .timeline-panel:after {
    position: absolute;
    top: 27px;
    right: -14px;
    display: inline-block;
    border-top: 14px solid transparent;
    border-left: 14px solid #fff;
    border-right: 0 solid #fff;
    border-bottom: 14px solid transparent;
    content: " ";
  }
  .timeline > li > .timeline-badge {
    color: #fff;
    width: 50px;
    height: 50px;
    line-height: 50px;
    font-size: 1.4em;
    text-align: center;
    position: absolute;
    top: 16px;
    left: 50%;
    margin-left: -25px;
    background-color: #999999;
    z-index: 100;
    border-top-right-radius: 50%;
    border-top-left-radius: 50%;
    border-bottom-right-radius: 50%;
    border-bottom-left-radius: 50%;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    float: right;
  }
  .timeline > li.timeline-inverted > .timeline-panel:before {
    border-left-width: 0;
    border-right-width: 15px;
    left: -15px;
    right: auto;
  }
  .timeline > li.timeline-inverted > .timeline-panel:after {
    border-left-width: 0;
    border-right-width: 14px;
    left: -14px;
    right: auto;
  }
  .timeline-badge.primary {
    background-color: #5b03e4 !important;
  }
  .timeline-badge.success {
    background-color: #5b03e4 !important;
  }
  .timeline-badge.warning {
    background-color: #5b03e4 !important;
  }
  .timeline-badge.danger {
    background-color: #5b03e4 !important;
  }
  .timeline-badge.info {
    background-color: #5b03e4 !important;
  }
  .timeline-title {
    margin-top: 0;
    color: inherit;
  }
  .timeline-body > p,
  .timeline-body > ul {
    margin-bottom: 0;
  }
  .timeline-body > p + p {
    margin-top: 5px;
  }
 </style>

  <div class="container mb-5 py-5" style="z-index: 9999;">
    <h3 class="text-center">Panduan</h3>
    <center><div class="line-dec"></div> </center>
    
    <ul class="timeline">
      <li>
       <div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4 class="timeline-title">Carilah buku yang anda minati</h4>
          </div>
          <div class="timeline-body">
            <p>Maksimal peminjaman 3 buku.</p>
          </div>
       </div>
      </li>
      <li class="timeline-inverted">
        <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4 class="timeline-title">Antri pada meja yang disediakan</h4>
          </div>
          <div class="timeline-body">
            <p>Setelah menemukan buku yang anda minati, silakan menuju ke meja pustakawan dan jangan lupa membawa kartu RFID. 
            </p>
          </div>
        </div>
      </li>
      <li>
       <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4 class="timeline-title">Siapkan kartu RFID</h4>
          </div>
          <div class="timeline-body">
            <p>Jika kondisi sedang mengantri, harap siapkan kartu RFID.
            </p>
          </div>
        </div>
      </li>
      <li class="timeline-inverted">
        <div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4 class="timeline-title">Scan kartu RFID dan Barcode Buku</h4>
          </div>
          <div class="timeline-body">
            <p>Ketika petugas perpustakaan sudah memperbolehkan anda menscan, harap scan kartu RFID dan Barcode Buku yang dipinjam pada sensor yang disediakan. 
            </p>
          </div>
        </div>
      </li> 
      <li>
        <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4 class="timeline-title">Peminjaman Selesai</h4>
          </div>
          <div class="timeline-body">
            <p>Apabila petugas perpustakaan memberitahukan peminjaman berhasil, maka peminjaman anda telah terinput.</p>
          </div>
        </div>
      </li>
      <li class="timeline-inverted">
        <div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4 class="timeline-title">Ingat tanggal pengembalian</h4>
          </div>
          <div class="timeline-body">
            <p>Jangan lupa untuk mengembalikan buku sesuai pada waktunya ya! jika tidak ingin terkena denda.
            </p>
          </div>
        </div>
      </li> 
    </ul>

  </div>
@endsection