<?php

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
Route::get('/berita', function () {
    return view('berita');
});

// gallery
Route::get('/gallery', function () {
    return view('gallery');
});

// simpanan
Route::get('/sibarokah', function () {
    return view('produk.simpananproduk.sibarokah');
});
Route::get('/siwajar', function () {
    return view('produk.simpananproduk.siwajar');
});
Route::get('/tabunganku', function () {
    return view('produk.simpananproduk.tabunganku');
});
Route::get('/tahara', function () {
    return view('produk.simpananproduk.tahara');
});
Route::get('/tapak', function () {
    return view('produk.simpananproduk.tapak');
});
Route::get('/bangkit', function () {
    return view('produk.simpananproduk.bangkit');
});
