<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
{
    $beritas = Berita::all();
    return view('berita_admin', compact('beritas'));
}

public function store(Request $request)
{
    $request->validate([
        'gambar' => 'required|image',
        'tgl' => 'required',
        'judul' => 'required',
        'artikel' => 'required',
        
    ]);

    $path = $request->file('gambar')->store('images/berita', 'public');

    Berita::create([
        'gambar' => $path,
        'tgl' => $request->tgl,
        'judul' => $request->judul,
        'artikel' => $request->artikel,
    ]);

    return redirect()->route('berita_admin')->with('success', 'Berita berhasil ditambahkan!');
}

}
