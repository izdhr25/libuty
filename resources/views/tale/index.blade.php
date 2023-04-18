@extends('layouts.front')

@section('title', 'Libuty | Home')

@section('content')
  <div class="main-banner" id="top">
    <img src="/assets/images/home5.jpg" class="img-fluid" style="top: -1px; right: 0; position: absolute; width: 60%; z-index: -1; margin-top: 111px">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <br><br><br>
          <div class="caption header-text">
            <h6>PERPUSTAKAAN</h6>
            <div class="line-dec"></div>
            <h4>
              Selamat Datang 
              <br><em>di Libuty</em>
            </h4>
            <p>Libuty (Library Butun City) adalah sebuah Control Management System dari Pengelolaan dan Pendataan Buku Berbasis Website untuk Memodernisasi Perpustakaan di Indonesia.</p>
            <div class="main-button scroll-to-section"><a href="/bukus">Koleksi</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br><br><br><br><br><br><br><br>

  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h2>Libuty Menyediakan <em> Berbagai Pelayanan</em>  Untuk Siswa dan Siswi
                </h2>
                <div class="line-dec"></div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="/assets/images/services-01.jpg" alt="discover SEO" class="templatemo-feature">
                </div>
                <h4>Pengolahan Data Lebih Terjamin</h4>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="/assets/images/services-02.jpg" alt="data analysis" class="templatemo-feature">
                </div>
                <h4>Mendata Buku Lebih Akurat</h4>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="/assets/images/services-03.jpg" alt="precise data" class="templatemo-feature">
                </div>
                <h4>Mempercepat Pelayanan Administrasi.</h4>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">  
                  <img src="/assets/images/services-04.jpg" alt="SEO marketing" class="templatemo-feature">
                </div>
                <h4>Memudahkan Pustakawan dan Siswa/i</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<br><br><br><br><br><br>
  <!-- Statistics -->
  <div class="counter">
      <div class="container px-4 sm:px-8" style="background:linear-gradient(to right, #5b03e4, #c03afe); border-radius: 2%">
          <br><br>
          <!-- Counter -->
          <div id="counter">
              <div class="cell">
                  <div class="counter-value number-count text-white" data-count="{{ $murid }}">1</div>
                  <p class="counter-info text-white">Pengguna</p>
              </div>
              <div class="cell">
                  <div class="counter-value number-count text-white" data-count="{{ $peminjaman }}">1</div>
                  <p class="counter-info text-white">Peminjaman</p>
              </div>
              <div class="cell">
                  <div class="counter-value number-count text-white" data-count="{{ $buku }}">1</div>
                  <p class="counter-info text-white">Jumlah Buku</p>
              </div>
              <div class="cell">
                  <div class="counter-value number-count text-white" data-count="{{ $kunjungan }}">1</div>
                  <p class="counter-info text-white">Kunjungan</p>
              </div>
          </div>
          <!-- end of counter -->

      </div> <!-- end of container -->
  </div> <!-- end of counter -->
  <!-- end of statistics -->

  <div class="projects section" id="projects">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Koleksi <em>Buku</em> &amp; <span>Rekomendasi</span></h2>
            <div class="line-dec"></div>
            <p>Libuty memiliki banyak koleksi buku dari berbagai kategori.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-features owl-carousel">
            @foreach($bukus as $buku)
            <div class="item">
              <img src="/img/buku/{{ $buku->image }}" alt="">
              <div class="down-content">
                <h4>{!! Str::limit($buku->judul, 16, '...') !!}</h4>
                <a href="{{ route('bukus.detail', base64_encode($buku->id)) }}"><i class="fa fa-circle-info"></i></a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="infos section" id="infos">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-content">
            <div class="row">
              <div class="col-lg-6">
                <div class="left-image">
                  <img src="/assets/images/icon9.png" alt="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="section-heading">
                  <h2>Profil <em>Perpustakaan</em></h2>
                  <div class="line-dec"></div>
                  <p class="text-dark" style="text-align: justify;"><b>Libuty</b> (Library Butun City) merupakan sebuah Aplikasi Berbasis Web untuk mengurangi keterlibatan petugas dalam melayani masyarakat, karena semua transaksi dan sirkulasi sudah diambil alih dengan teknologi tersebut, dan keterlibatan anggota perpustakaan dalam proses sirkulasi layanan baik peminjaman dan pengembalian lebih mandiri.<br>
                  <i class="fa-solid fa-circle-check mt-2"></i> Menghemat waktu dan kertas. <br>
                  <i class="fa-solid fa-circle-check"></i> Pelayanan lebih cepat dan efisien. <br>
                  <i class="fa-solid fa-circle-check"></i> Alur penggunaan Web dan alat RFID serta QR Code fleksibel. <br>
                  <i class="fa-solid fa-circle-check"></i> Data lebih aman dengan Libuty.</p>
                </div>
              <!-- <p class="more-info text-dark"></p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-us-content">
            <div class="row">
              <div class="col-lg-4">
                <div id="map">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.295886607473!2d106.98985671413901!3d-6.3557315639456915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c22161d4051%3A0x7a0a35b288779341!2sSMKN%202%20Kota%20Bekasi!5e0!3m2!1sid!2sid!4v1674393136324!5m2!1sid!2sid"
                    width="100%" height="670px" frameborder="0" style="border:0; border-radius: 23px;"
                    allowfullscreen=""></iframe>
                </div>
              </div>
              <div class="col-lg-8">
                @foreach($kontak as $kontaks)
                <h3 class="text-center">Kontak Kami</h3>
                <p class="text-center text-muted">Klik ikon dibawah ini</p>
                <center>                
                  <a href="https://wa.me/{{ $kontaks->telepon }}"><img src="/img/logo/whats.png" class="img-fluid" style="width: 50%"></a>
                </center>
                <div class="more-info">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-phone"></i>
                        <h4><a href="#">{{ $kontaks->telepon }}</a></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-envelope"></i>
                        <h4><a href="#">{{ $kontaks->email }}</a></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-map-marker"></i>
                        <h4><a href="#">{!! $kontaks->alamat !!}</a></h4>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection