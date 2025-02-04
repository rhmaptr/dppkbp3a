<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beranda;
use App\Models\pengaduan;
use App\Models\Konten;
use App\Models\Poster;
use App\Models\Profil;
use App\Models\Visi;
use App\Models\Tugas;
use App\Models\User;
use App\Models\Photo;
use App\Models\Berita;
use App\Models\Gallery;

class LandingController extends Controller
{
    public function landing()
    {
        $photos = Photo::all(); // Ambil semua data dari tabel 'photos'
        return view('landing', compact('photos'));
    }

public function profil()
{
    $profils = Profil::latest()->take(1)->get();
    return view('landing', compact('profils'));
}

}
