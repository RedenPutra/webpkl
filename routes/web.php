<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// halaman home
Route::get('/', function () {
    return view('index');
});

// profil
Route::get('/visi', function () {
    return view('profil.visimisi');
});
Route::get('/sejarah', function () {
    return view('profil.sejarah');
});
Route::get('/cab', function () {
    return view('profil.kantorcabang');
});
Route::get('/struktur', function () {
    return view('profil.strukturorganisasi');
});

// produk
Route::get('/tabungan', function () {
    return view('produk.simpanan');
});
Route::get('/kredit', function () {
    return view('produk.kredit');
});

// simulasi
Route::get('/umum', function () {
    return view('simulasi.kreditumum');
});
Route::get('/mikro', function () {
    return view('simulasi.sahabatmikro');
});

// laporan
Route::get('/keuangan', function () {
    return view('laporan.keuanganbpr');
});
Route::get('/kelola', function () {
    return view('laporan.tatakelolabpr');
});

// berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

// gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

// simpanan
Route::get('/sibarokah', function () {
    return view('produk.simpananproduk.sibarokah');
});
Route::get('/siwajar', function () {
    return view('produk.simpananproduk.siwajar');
});
// Route::get('/tabunganku', function () {
//     return view('produk.simpananproduk.tabunganku');
// });
Route::get('/tahara', function () {
    return view('produk.simpananproduk.tahara');
});
Route::get('/tapak', function () {
    return view('produk.simpananproduk.tapak');
});
Route::get('/bangkit', function () {
    return view('produk.simpananproduk.bangkit');
});

// auth/login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'Login'])->name('logins');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    // tambahberita
    Route::get('/tambahberita', [BeritaController::class, 'create']);
    Route::post('/tambahberita', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/tambahberita', [BeritaController::class, 'tambah'])->name('tambahberita.tam');
    Route::get('/tambahberita/edit/{id}', [BeritaController::class, 'edit'])->name('tambahberita.edit');
    Route::put('/tambahberita/edit/{id}', [BeritaController::class, 'update'])->name('tambahberita.update');
    Route::get('/tambahberita/delete/{id}', [BeritaController::class, 'delete'])->name('tambahberita.delete');


    // gallery
    Route::get('/tambahgallery', [GalleryController::class, 'create']);
    Route::post('/tambahgallery', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/tambahgallery', [GalleryController::class, 'tambah'])->name('tambahgallery.tam');
    Route::get('/tambahgallery/edit/{id}', [GalleryController::class, 'edit'])->name('tambahgallery.edit');
    Route::put('/tambahgallery/edit/{id}', [GalleryController::class, 'update'])->name('tambahgallery.update');
    Route::get('/tambahgallery/delete/{id}', [GalleryController::class, 'delete'])->name('tambahgallery.delete');

    // dashboard
    Route::get('/dashboard', [LoginController::class, 'indexdash'])->name('dashboard.index');
});