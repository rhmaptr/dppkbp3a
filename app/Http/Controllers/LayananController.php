<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::all();
        return view('layanan_admin', compact('layanans'));
    }

    public function create()
    {
        return view('edit_layanan');
    }

    public function store(Request $request)
    {
    // Validasi input
    $request->validate([
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'judul' => 'required|string|max:255',
        'penjelasan' => 'required|string|max:255',
        'artikel' => 'required|string|max:255',
    ]);

    // Upload image dan simpan path-nya
    $gambar = $request->file('gambar')->store('public/layanans');

    // Simpan data ke database
    Layanan::create([
        'gambar' => $gambar,
        'judul' => $request->judul,
        'penjelasan' => $request->penjelasan,
        'artikel' => $request->artikel,
        
    ]);

        return redirect()->route('layanan_admin')->with('success', 'Foto berhasil ditambahkan!');
    }

    public function edit($id)
{
    $layanans = Layanan::findOrFail($id);
    return view('layanan.edit', compact('layanans'));
}

public function destroy($id)
{
    $layanans = Layanan::findOrFail($id);
    $layanans->delete();

    return redirect()->route('layanan_admin')->with('success', 'Berita berhasil dihapus!');
}

}

