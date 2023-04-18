@extends('layouts.front')

@section('title', 'Libuty | FAQ')

@section('content')

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 align-self-center">
          <div class="caption  header-text">
            <h6>PERPUSTAKAAN</h6>
            <div class="line-dec"></div>
            <h4>Pertanyaan <em>Yang Banyak Dianyakan</em> Disini<em>?</em></h4>
          </div>
        </div>
        <div class="col-lg-5">
          <img src="assets/images/faqs-image.jpg" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="most-asked section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Pertanyaan <em>Yang Banyak Dianyakan</em> Disini<em>?</em></h2>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">
            <article class="accordion">
              <div class="accordion-head">
                <span>Apa itu teknologi RFID dan bagaimana ia digunakan dalam perpustakaan?</span>
                <span class="icon">
                  <i class="icon fa fa-chevron-right"></i>
                </span>
              </div>
              <div class="accordion-body">
                <div class="content">
                  <p class="text-dark" style="text-align: justify;">RFID (Radio Frequency Identification) adalah teknologi identifikasi otomatis dengan menggunakan gelombang radio untuk mengidentifikasi, melacak, dan memanipulasi objek yang terpasang dengan tag RFID. Teknologi ini dapat membaca informasi dari tag RFID tanpa memerlukan kontak fisik dan memungkinkan pengguna untuk mengakses data secara real-time. RFID banyak digunakan dalam berbagai aplikasi, seperti pengelolaan stok, kontrol akses, pembayaran nontunai, dan lain sebagainya. Di perpustakaan, RFID digunakan untuk mengelola koleksi buku dan memudahkan peminjaman dan pengembalian buku oleh pengunjung.</p>
                </div>
              </div>
            </article>
            <article class="accordion">
              <div class="accordion-head">
                <span>Apa keuntungan menggunakan perpustakaan RFID dibandingkan dengan sistem manual?</span>
                <span class="icon">
                  <i class="icon fa fa-chevron-right"></i>
                </span>
              </div>
              <div class="accordion-body">
                <div class="content">
                  <p class="text-dark" style="text-align: justify;">
                    1. Efisiensi waktu: Dalam perpustakaan RFID, proses peminjaman dan pengembalian buku dapat dilakukan secara otomatis dalam hitungan detik, sehingga menghemat waktu dibandingkan dengan sistem manual yang memerlukan waktu yang lebih lama.
                    <br>
                    2. Akurasi data: Dengan teknologi RFID, pengumpulan data menjadi lebih akurat dan terstandarisasi, mengurangi risiko kesalahan dalam pencatatan dan pengelolaan data.
                    <br>
                    3. Mengurangi biaya operasional: Sistem RFID dapat mengurangi biaya operasional perpustakaan karena mengurangi kebutuhan untuk tenaga kerja manusia dan waktu yang digunakan untuk melakukan tugas-tugas manual seperti pencatatan dan pengelolaan data.
                    <br>
                    4. Mempercepat pencarian buku: Dalam perpustakaan RFID, sistem pencarian buku dapat dilakukan dengan mudah dan cepat karena teknologi RFID memungkinkan pengunjung mencari buku melalui terminal pencarian buku elektronik.
                    <br>
                    5. Meningkatkan keamanan: Sistem RFID dapat membantu meningkatkan keamanan perpustakaan karena sistem tersebut dapat mendeteksi buku yang dicuri dan memberikan peringatan kepada petugas perpustakaan.
                  </p>
                </div>
              </div>
            </article>
            <article class="accordion">
              <div class="accordion-head">
                <span>Bagaimana proses peminjaman dan pengembalian buku dilakukan dengan sistem RFID?</span>
                <span class="icon">
                  <i class="icon fa fa-chevron-right"></i>
                </span>
              </div>
              <div class="accordion-body">
                <div class="content">
                  <p class="text-dark" style="text-align: justify;">
                    Peminjaman Buku:
                    <br>
                    Pengunjung datang ke mesin self-checkout yang dilengkapi dengan RFID reader.
                    <br>
                    Pengunjung menempatkan kartu anggota perpustakaan pada RFID reader untuk mengidentifikasi dirinya.
                    <br>
                    Kemudian pengunjung menempatkan buku yang ingin dipinjam pada area RFID reader pada mesin self-checkout.
                    <br>
                    Mesin akan membaca tag RFID pada buku dan mengidentifikasi informasi buku seperti judul, pengarang, dan nomor peminjaman.
                    <br>
                    Pengunjung dapat memverifikasi informasi buku dan memilih opsi untuk mencetak peminjaman atau mengirimkan informasi tersebut ke email atau akun pengunjung di perpustakaan.
                    <br>
                    Pengembalian Buku:
                    <br>
                    Pengunjung datang ke mesin self-check-in yang dilengkapi dengan RFID reader.
                    <br>
                    Pengunjung menempatkan buku yang ingin dikembalikan pada area RFID reader pada mesin self-check-in.
                    <br>
                    Mesin akan membaca tag RFID pada buku dan mengidentifikasi informasi buku seperti judul, pengarang, dan nomor peminjaman.
                    <br>
                    Sistem akan mencocokkan informasi buku dengan informasi peminjaman dan menghapus data peminjaman dari database.
                    <br>
                    Pengunjung dapat memverifikasi informasi buku dan memilih opsi untuk mencetak tanda terima pengembalian atau mengirimkan informasi tersebut ke email atau akun pengunjung di perpustakaan.
                </p>
              </div>
            </article>
            <article class="accordion">
              <div class="accordion-head">
                <span>Bagaimana sistem RFID membantu dalam meminimalkan kesalahan pengarsipan dan pemindahan buku?</span>
                <span class="icon">
                  <i class="icon fa fa-chevron-right"></i>
                </span>
              </div>
              <div class="accordion-body">
                <div class="content">
                  <p class="text-dark" style="text-align: justify;">Dalam hal pemindahan buku, sistem RFID juga dapat memudahkan perpustakaan untuk mengetahui buku-buku mana yang harus dipindahkan ke rak lain atau diatur ulang posisinya. Dengan informasi yang akurat dan real-time tentang lokasi setiap buku, staf perpustakaan dapat menghemat waktu dan usaha dalam merapikan dan mengatur koleksi buku.</p>
                </div>
              </div>
            </article>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="get-free-quote">
            <form id="free-quote" method="submit" role="search" action="#">
              <div class="row">
                <div class="col-lg-12">
                  <div class="section-heading">
                    <h2><em>Jika Ada Kendala</em> Silakan Kontak <span>Kami</span></h2>
                  </div>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail"
                      required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="website" name="website" id="website" placeholder="Website URL" autocomplete="on"
                      required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="phone-number" name="phone-number" id="phone-number" placeholder="Phone Number"
                      autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="full-name" name="full-name" id="full-name" placeholder="Full Name" autocomplete="on">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Kirim</button>
                  </fieldset>
                </div>
              </div>
            </form>
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