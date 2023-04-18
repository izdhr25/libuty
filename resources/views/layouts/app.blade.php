<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel='icon' href='/img/libutyicon.png'>
    
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/fontawesome/css/all.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="//cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>

    <script>
      CKEDITOR.replace('content');
    </script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
  
    </ul>

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/pustakawan" class="brand-link mt-2 text-center">
      <img src="/img/libutyberwarna.png" alt="MoTeun Logo" class="img-fluid rounded-pill" style="opacity: .8;" width="60%">
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/img/userprofile/{{ Auth::user()->image }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info my-auto">
          <a href="" class="d-block" style="text-decoration: none">{{ Auth::user()->name }}</a>
        </div>
      </div>

           <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/pustakawan" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
              <a href="/" target="_blank" class="nav-link">
              <i class="nav-icon fas fa-link"></i>
                <p>
                  Lihat Website   
                </p>
              </a>
          </li>

          <li class="nav-item menu-open">
            <a href="/buku" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Perpustakaan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/buku" class="nav-link">
                  <i class="fas fa-book-open nav-icon"></i>
                  <p>Data Buku</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/peminjaman" class="nav-link">
                  <i class="fas fa-hand-holding nav-icon"></i>
                  <p>Data Peminjaman</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/akunsiswa" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Data Siswa</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/akunpustakawan" class="nav-link">
                  <i class="fas fa-id-badge nav-icon"></i>
                  <p>Data Pustakawan</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/kunjungan" class="nav-link">
                  <i class="fas fa-person-booth nav-icon"></i>
                  <p>Data Kunjungan</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/denda" class="nav-link">
                  <i class="fas fa-money-bill-wave nav-icon"></i>
                  <p>Data Denda</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/berita" class="nav-link">
                  <i class="fas fa-newspaper nav-icon"></i>
                  <p>Data Berita</p>
                </a>
              </li> 
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="/akun" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Akun
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/kontak" class="nav-link">
              <i class="nav-icon fas fa-phone"></i>
              <p>
                Kontak
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="nav-icon fas fa-arrow-left"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title')</h1>
          </div>
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">@yield('title')</h5>
              </div>
              <div class="card-body">
                @yield('content')

                <!-- Main Footer -->
                <footer class="footer">
                  <strong>Copyright &copy; {{ date('Y') }} Troffe Corporation Inc.</strong> All rights reserved.
                </footer>
              </div>
            </div>
          </div>
          <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/lte/dist/js/adminlte.min.js"></script>
<script type="text/javascript" src="/assets/fontawesome/js/all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
