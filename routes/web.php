<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\submitMultiStepController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\User2Controller;

// Route::get('/profil_landing', function () {
//     return view('profil_landing');
// })->name('profil_landing');

Route::get('/landing', [LandingController::class, 'landing'])->name('landing');
Route::get('/landing', [LandingController::class, 'landing'])->name('landing');

Route::get('/tambah_dokumentasi', [PhotoController::class, 'create'])->name('tambah_dokumentasi');
Route::post('/tambah_dokumentasi', [PhotoController::class, 'store'])->name('tambah_dokumentasi.create');
Route::post('/dokumentasi', [PhotoController::class, 'store'])->name('dokumentasi.store');
Route::get('/dokumentasi', [PhotoController::class, 'index'])->name('dokumentasi');
Route::get('/editdokumentasi/{id}', [PhotoController::class, 'edit'])->name('dokumentasi.edit');
Route::put('/dokumentasi/{id}', [PhotoController::class, 'update'])->name('dokumentasi.update');
Route::delete('/dokumentasi/{id}', [PhotoController::class, 'destroy'])->name('dokumentasi.destroy');

Route::get('/foto', [FotoController::class, 'index'])->name('foto'); 
Route::post('/foto', [FotoController::class, 'store'])->name('foto.store');
Route::get('/foto', [FotoController::class, 'show'])->name('foto.landing');

Route::get('/berita_admin', [BeritaController::class, 'index'])->name('index');
Route::get('/tambah_berita', [BeritaController::class, 'create'])->name('tambah_berita');
Route::post('/tambah_berita', [BeritaController::class, 'store'])->name('tambah_berita.create');
// Route::get('/berita_admin/{id}/edit', [BeritaController::class, 'edit'])->name('edit');
// Route::put('/berita_admin/{id}', [BeritaController::class, 'update'])->name('update');
// Route::delete('/berita_admin/{id}', [BeritaController::class, 'destroy'])->name('destroy');

Route::prefix('/login')->group(function () {
Route::get('/', [AdminController::class, 'showLoginForm'])->name('login');
Route::post('/', [AdminController::class, 'login'])->name('login.submit');
Route::middleware('auth:admin')->group(function () {
Route::get('beranda', [AdminController::class, 'beranda'])->name('beranda');
    });
});

Route::get('/tindakankb', [submitMultiStepController::class, 'index'])->name('tindakankb');
Route::post('/tindakankb', [submitMultiStepController::class, 'submitMultiStep'])->name('tindakankb.submitMultiStep');

// Admin pengaduan
Route::get('/pengaduan', [UserController::class, 'pengaduan'])->name('pengaduan');
Route::get('/detail/{id}', [submitMultiStepController::class, 'detail'])->name('detail');

//admin profil
Route::get('/tambah_profil', [User2Controller::class, 'create'])->name('tambah_profil');
Route::post('/tambah_profil', [User2Controller::class, 'store'])->name('tambah_profil.create');
Route::post('/profil_landing', [User2Controller::class, 'store'])->name('profil_landing.store');
Route::get('/profil_landing', [User2Controller::class, 'index'])->name('profil_landing');
// Route::get('/editdokumentasi/{id}', [User2Controller::class, 'edit'])->name('dokumentasi.edit');
Route::put('/profil_landing/{id}', [User2Controller::class, 'update'])->name('profil_landing.update');
Route::delete('/profil_landing/{id}', [User2Controller::class, 'destroy'])->name('profil_landing.destroy');
// Route::get('/profil_landing', [User2Controller::class, 'index'])->name('profil_landing');
// Route::get('/tambah_profil', [User2Controller::class, 'create'])->name('tambah_profil');
// Route::post('/profil_landing', [User2Controller::class, 'profil'])->name('tambah_profil.profil');

//admin layanan
Route::get('/layanan_admin', [LayananController::class, 'index'])->name('layanan_admin');
Route::get('/edit_layanan', [LayananController::class, 'create'])->name('edit_layanan');
Route::post('/edit_layanan', [LayananController::class, 'store'])->name('edit_layanan.create');

//admin konten pengaduan
Route::get('/pengaduan_2', [KontenController::class, 'index'])->name('pengaduan_2');
Route::get('/edit_pengaduan', [KontenController::class, 'create'])->name('edit_pengaduan');
Route::post('/edit_pengaduan', [KontenController::class, 'store'])->name('edit_pengaduan.create');

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/tindakanpp', function () {
    return view('tindakanpp');
});

Route::get('/tindakanpa', function () {
    return view('tindakanpa');
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

// Route::get('/layanan_admin', function () {
//     return view('layanan_admin');
// });

// Route::get('/dokumentasi', function () {
//     return view('dokumentasi');
// });

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

Route::get('/tambah_profil', function () {
    return view('tambah_profil');
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