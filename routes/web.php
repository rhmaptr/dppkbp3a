<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\submitMultiStepController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PhotoController;

Route::resource('photos', DokumentasiController::class)->except(['show', 'edit', 'update']);
Route::get('/landing', [LandingController::class, 'index'])->name('landing');
Route::get('/tambah_dokumentasi', [PhotoController::class, 'create'])->name('tambah_dokumentasi.create');
Route::post('/dokumentasi', [PhotoController::class, 'store'])->name('dokumentasi.store');
Route::get('/photo', [PhotoController::class, 'index'])->name('photo');

Route::get('/foto', [FotoController::class, 'index'])->name('foto'); 
Route::post('/foto', [FotoController::class, 'store'])->name('foto.store');
Route::get('/foto', [FotoController::class, 'show'])->name('landing');

// Route::post('/berita_admin', [BeritaController::class, 'store'])->name('store');
Route::get('/berita_admin', [BeritaController::class, 'index'])->name('index');
// Route::get('/admin/berita/create', [BeritaController::class, 'create'])->name('admin.berita.create');
Route::post('/berita_admin', [BeritaController::class, 'store'])->name('berita_admin.store');
Route::get('/berita_admin/{id}/edit', [BeritaController::class, 'edit'])->name('edit');
Route::put('/berita_admin/{id}', [BeritaController::class, 'update'])->name('update');
Route::delete('/berita_admin/{id}', [BeritaController::class, 'destroy'])->name('destroy');

Route::prefix('/login')->group(function () {
Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminController::class, 'login'])->name('login.submit');
Route::middleware('auth:admin')->group(function () {
Route::get('beranda', [AdminController::class, 'beranda'])->name('beranda');
    });
});


// Route::post('/submit-multistep', [FormController::class, 'submitMultiStep'])->name('submit.multistep');
Route::get('/tindakankb', [FormController::class, 'tindakankb'])->name('tindakankb');
Route::post('/tindakankb', [submitMultiStepController::class, 'submitMultiStep'])->name('tindakankb.submitMultiStep');
Route::get('/pengaduan', [FormController::class, 'pengaduan'])->name('pengaduan');


// Admin route
Route::get('/pengaduan', [UserController::class, 'pengaduan'])->name('pengaduan');
Route::get('/detail/{id}', [submitMultiStepController::class, 'detail'])->name('detail');


// Admin routes
// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::get('/news', [NewsController::class, 'adminIndex'])->name('news.index');
//     Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
//     Route::post('/news', [NewsController::class, 'store'])->name('news.store');
// });

// Public routes
// Route::get('/news', [NewsController::class, 'userIndex'])->name('news.index');

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

// Route::get('/berita_admin', function () {
//     return view('berita_admin');
// });

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

Route::get('/tambah_berita', function () {
    return view('tambah_berita');
});

Route::get('/tambah_layanan', function () {
    return view('tambah_layanan');
});

// Route::get('/detail', function () {
//     return view('detail');
// });