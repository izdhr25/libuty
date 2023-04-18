<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PustakawanController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\DendaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RFIDController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ErrorController;

Auth::routes();

// Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/profil', [App\Http\Controllers\HomeController::class, 'profil']);
Route::get('/bukus', [App\Http\Controllers\HomeController::class, 'bukus']);
Route::get('/beritas', [App\Http\Controllers\HomeController::class, 'beritas']);
Route::get('/panduan', [App\Http\Controllers\HomeController::class, 'panduan']);
Route::get('/pustakawans', [App\Http\Controllers\HomeController::class, 'pustakawans']);
Route::get('/peminjamans', [App\Http\Controllers\HomeController::class, 'peminjamans']);
Route::get('/faqs', [App\Http\Controllers\HomeController::class, 'faqs']);
Route::get('/bukus/detail/{id}', 'App\Http\Controllers\HomeController@bukusdetail')->name('bukus.detail')->where('id', '[A-Za-z0-9+/]+={0,2}');
Route::get('/beritas/detail/{id}', 'App\Http\Controllers\HomeController@beritadetail')->name('beritas.detail')->where('id', '[A-Za-z0-9+/]+={0,2}');

Route::get('/404', 'ErrorController@modelNotFound')->name('404');

// Register User
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// jika user belum login
Route::group(['middleware' => 'guest'], function() {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'dologin']);
    Route::get('/rfid', [RFIDController::class, 'login'])->name('login.rfid');
    Route::post('/rfid', [RFIDController::class, 'dologin']);
    Route::post('/logout', [LoginController::class, 'logout']);
});

// untuk admin dan user
Route::group(['middleware' => ['auth', 'checkrole:1,2']], function() {
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/redirect', [RedirectController::class, 'cek']);
});


// untuk admin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/pustakawan', [AdminController::class, 'index'])->name('pustakawan');

    Route::post('/pustakawan/kunjungan', [AdminController::class, 'store'])->name('pustakawan.store');
    Route::post('/pustakawan/pinjam', [AdminController::class, 'storePinjam'])->name('pustakawan.storePinjam');
    Route::post('/pustakawan/denda', [AdminController::class, 'storeDenda'])->name('pustakawan.storeDenda');
    Route::post('/pustakawan/kembali', [AdminController::class, 'storeKembali'])->name('pustakawan.storeKembali');

	Route::resource('buku', App\Http\Controllers\BukuController::class);

	Route::resource('peminjaman', App\Http\Controllers\PeminjamanController::class);

	Route::resource('akunsiswa', App\Http\Controllers\SiswaController::class);

	Route::resource('akunpustakawan', App\Http\Controllers\PustakawanController::class);

	Route::resource('kunjungan', App\Http\Controllers\KunjunganController::class);

	Route::resource('tentang', App\Http\Controllers\TentangController::class);

	Route::resource('kontak', App\Http\Controllers\KontakController::class);

	Route::resource('denda', App\Http\Controllers\DendaController::class);

    Route::resource('berita', App\Http\Controllers\BeritaController::class);

	Route::resource('akun', App\Http\Controllers\AkunController::class);

    // Imxport Excel
    Route::post('/buku/import', 'App\Http\Controllers\BukuExcelController@import')->name('import');
    Route::post('/akunsiswa/import', 'App\Http\Controllers\SiswaExcelController@import')->name('akunsiswa.import');
    Route::post('/akunpustakawan/import', 'App\Http\Controllers\PustakawanExcelController@import')->name('akunpustakawan.import');
    Route::post('/kunjungan/import', 'App\Http\Controllers\KunjunganExcelController@import')->name('kunjungan.import');
    Route::post('/peminjaman/import', 'App\Http\Controllers\PeminjamanExcelController@import')->name('pinjam.import');
});

// untuk user
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/siswa', [UserController::class, 'index'])->name('siswa');

    Route::get('/user', [UserController::class, 'user'])->name('user');
    Route::post('/user/{id}', [UserController::class, 'update']);
    Route::get('/kunjung', [UserController::class, 'kunjungad']);
    Route::get('/feelate', [UserController::class, 'dendad']);
    Route::get('/borrow', [UserController::class, 'pinjam']);
});
