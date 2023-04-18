@extends('layouts.front')

@section('title', 'Libuty | Profil')

@section('content')

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 align-self-center">
          <div class="caption header-text">
            <h6>PERPUSTAKAAN</h6>
            <div class="line-dec"></div>
            <h4>
              Profil 
              <br><em>di Libuty</em>
            </h4>
            <p>Libuty (Library Butun City) adalah sebuah Control Management System dari Pengelolaan dan Pendataan Buku Berbasis Website untuk Memodernisasi Perpustakaan di Indonesia.</p>
            <div class="main-button scroll-to-section"><a href="#video">Informasi</a></div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <img src="/assets/images/home5.jpg" class="img-fluid" style="top: -1px; right: 0; position: absolute; width: 60%; z-index: -1; margin-top: 140px">
        </div>
      </div>
    </div>
  </div>

  <div class="video-info section" id="video">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="video-thumb">
            <img src="/assets/images/book2.jpg" alt="">
            <a href="http://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <h2>Profil Perpustakaan</h2>
              <div class="line-dec"></div>
                <p style="text-align: justify;"><b>Libuty</b> (Library Butun City) merupakan sebuah Aplikasi Berbasis Web untuk mengurangi keterlibatan petugas dalam melayani masyarakat, karena semua transaksi dan sirkulasi sudah diambil alih dengan teknologi tersebut, dan keterlibatan anggota perpustakaan dalam proses sirkulasi layanan baik peminjaman dan pengembalian lebih mandiri.<br>
                <i class="fa-solid fa-circle-check mt-2"></i> Menghemat waktu dan kertas. <br>
                <i class="fa-solid fa-circle-check"></i> Pelayanan lebih cepat dan efisien. <br>
                <i class="fa-solid fa-circle-check"></i> Alur penggunaan Web dan alat RFID serta QR Code fleksibel. <br>
                <i class="fa-solid fa-circle-check"></i> Data lebih aman dengan Libuty.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="happy-clients section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Pelayanan Kami Kepada Siswa/i</h2>
            <div class="line-dec"></div>
            <p>Libuty Menyediakan Beberapa Layanan</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="active"><span>Otomatisasi dan Pengembalian</span></div>
                    <div><span>Akurasi Inventaris Buku Peminjam</span></div>
                    <div><span>Pengurangan Biaya Operasional</span></div>
                    <div class="last-item"><span>Pengalaman Peminjaman Lebih Mudah</span></div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="row">
                          <div class="col-lg-7">
                            <h4>Otomatisasi Peminjaman dan Pengembalian Buku</h4>
                            <div class="line-dec"></div>
                            <p>RFID dapat memungkinkan perpustakaan untuk melakukan peminjaman dan pengembalian buku secara otomatis. Ketika buku ditempatkan di atas meja RFID, sistem akan secara otomatis membaca tag RFID di buku dan memperbarui status buku dalam sistem perpustakaan. Ini mempercepat proses peminjaman dan pengembalian buku dan mengurangi waktu antrian.</p>
                          </div>
                          <div class="col-lg-5 align-self-center">
                            <img src="/assets/images/happyclient-01.jpg" alt="">
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="row">
                          <div class="col-lg-7">
                            <h4>Akurasi Inventaris yang Lebih Baik</h4>
                            <div class="line-dec"></div>
                            <p>RFID memungkinkan perpustakaan untuk melakukan inventarisasi buku dengan lebih akurat dan cepat. Pada saat inventarisasi, sistem RFID dapat membaca tag RFID di setiap buku dan memperbarui status buku dalam sistem perpustakaan. Ini memungkinkan perpustakaan untuk memiliki inventaris buku yang lebih akurat, memudahkan pengelolaan koleksi buku, dan meminimalkan risiko kehilangan atau hilangnya buku.</p>
                          </div>
                          <div class="col-lg-5 align-self-center">
                            <img src="/assets/images/happyclient-01.jpg" alt="">
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="row">
                          <div class="col-lg-7">
                            <h4>Pengurangan Biaya Operasional</h4>
                            <div class="line-dec"></div>
                            <p>RFID dapat mengurangi biaya operasional perpustakaan dengan mempercepat proses peminjaman, pengembalian, dan inventarisasi buku. Selain itu, penggunaan RFID juga dapat mengurangi biaya cetak dan penggunaan kartu peminjaman karena dapat digantikan dengan tag RFID.</p>
                          </div>
                          <div class="col-lg-5 align-self-center">
                            <img src="/assets/images/happyclient-01.jpg" alt="">
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="row">
                          <div class="col-lg-7">
                            <h4>Pengalaman Peminjaman Buku yang Lebih Mudah</h4>
                            <div class="line-dec"></div>
                            <p>Penggunaan RFID dapat mempercepat proses peminjaman dan pengembalian buku sehingga pengguna akan merasa lebih mudah dan cepat untuk meminjam dan mengembalikan buku.</p>
                          </div>
                          <div class="col-lg-5 align-self-center">
                            <img src="/assets/images/happyclient-01.jpg" alt="">
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="cta section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h4>Ada Pertanyaan? Silakan Tanyakan Pada Kami<br>Jangan Sungkan Kontak Kami!</h4>
        </div>
        <div class="col-lg-4">
          <div class="main-button">
            <a href="#">Kontak</a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection