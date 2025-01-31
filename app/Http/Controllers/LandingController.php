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
use App\Models\Layanan;
use App\Models\Photo;
use App\Models\Berita;

class LandingController extends Controller
{
   public function index()
{
    $photos = Photo::latest()->take(9)->get();
    return view('landing', compact('photos'));
}

}
