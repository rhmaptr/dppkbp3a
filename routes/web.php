<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminAuthController;


// Rute GET pikeun nampilin form login
Route::get('/login', [AdminAuthController::class, 'index'])->name('login');

// Rute POST pikeun ngirim data login
Route::post('/login', [AdminAuthController::class, 'login']);

// Rute untuk halaman beranda setelah login
Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');


Route::get('/landing', function () {
    return view('landing');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/tindakankb', function () {
    return view('tindakankb');
});

Route::get('/tindakankb2', function () {
    return view('tindakankb2');
});

Route::get('/tindakankb3', function () {
    return view('tindakankb3');
});

Route::get('/tindakanpp', function () {
    return view('tindakanpp');
});

Route::get('/tindakanpp2', function () {
    return view('tindakanpp2');
});

Route::get('/tindakanpp3', function () {
    return view('tindakanpp3');
});

Route::get('/tindakanpa', function () {
    return view('tindakanpa');
});

Route::get('/tindakanpa2', function () {
    return view('tindakanpa2');
});

Route::get('/tindakanpa3', function () {
    return view('tindakanpa3');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/popup_simpan', function () {
    return view('popup_simpan');
});

Route::get('/popup_hapus', function () {
    return view('popup_hapus');
});

Route::get('/program', function () {
    return view('program');
});

Route::get('/poster', function () {
    return view('poster');
});

Route::get('/visi_admin', function () {
    return view('visi_admin');
});

Route::get('/pusat_admin', function () {
    return view('pusat_admin');
});

Route::get('/layanan_admin', function () {
    return view('layanan_admin');
});

Route::get('/dokumentasi', function () {
    return view('dokumentasi');
});

Route::get('/berita_admin', function () {
    return view('berita_admin');
});

Route::get('/tambah_berita', function () {
    return view('tambah_berita');
});
