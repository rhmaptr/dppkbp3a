<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\NewsController;

Route::get('/login', function () {
    return view('login');
});

Route::prefix('admin')->group(function () {
    Route::get('login', [AdminController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminController::class, 'login'])->name('login.submit');
    Route::middleware('auth:admin')->group(function () {
        Route::get('beranda', [AdminController::class, 'beranda'])->name('beranda');
    });
});


Route::post('/submit-multistep', [FormController::class, 'submitMultiStep'])->name('submit.multistep');


// Admin route
Route::get('pengaduan', [AdminController::class, 'pengaduan'])->name('pengaduan');

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/news', [NewsController::class, 'adminIndex'])->name('news.index');
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news', [NewsController::class, 'store'])->name('news.store');
});

// Public routes
Route::get('/news', [NewsController::class, 'userIndex'])->name('news.index');


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

Route::get('/pengaduan', function () {
    return view('pengaduan');
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

Route::get('/poster', function () {
    return view('poster');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/pengaduan_2', function () {
    return view('pengaduan_2');
});

Route::get('/edit_berita', function () {
    return view('edit_berita');
});

Route::get('/visi_misi', function () {
    return view('visi_misi');
});

Route::get('/edit_pengaduan', function () {
    return view('edit_pengaduan');
});

Route::get('/tambah_poster', function () {
    return view('tambah_poster');
});

Route::get('/edit_poster', function () {
    return view('edit_poster');
});

Route::get('/tambah_visi', function () {
    return view('tambah_visi');
});

Route::get('/edit_visi', function () {
    return view('edit_visi');
});

Route::get('/edit_layanan', function () {
    return view('edit_layanan');
});

Route::get('/tambah_dokumentasi', function () {
    return view('tambah_dokumentasi');
});

Route::get('/edit_dokumentasi', function () {
    return view('edit_dokumentasi');
});

Route::get('/edit_profil', function () {
    return view('edit_profil');
});

Route::get('/edit_tugas', function () {
    return view('edit_tugas');
});

Route::get('/detail_pengaduan', function () {
    return view('detail_pengaduan');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/isi_berita', function () {
    return view('isi_berita');
});

Route::get('/tugas_pokok', function () {
    return view('tugas_pokok');
});

Route::get('/profil_landing', function () {
    return view('profil_landing');
});

Route::get('/layanan', function () {
    return view('layanan');
});