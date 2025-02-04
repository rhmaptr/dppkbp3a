<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Http\Request;

class kontenController extends Controller
{
    public function index()
    {
        $kontens = Konten::all();
        return view('pengaduan_2', compact('kontens'));
    }

    public function create()
    {
        return view('edit_pengaduan');
    }

    public function store(Request $request)
    {
    // Validasi input
    $request->validate([
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'judul' => 'required|string|max:255',
        'penjelasan' => 'required|string|max:255',
    ]);

    // Upload image dan simpan path-nya
    $gambar = $request->file('gambar')->store('public/kontens');

    // Simpan data ke database
    Konten::create([
        'gambar' => $gambar,
        'judul' => $request->judul,
        'penjelasan' => $request->penjelasan,
    ]);

        return redirect()->route('pengaduan_2')->with('success', 'Foto berhasil ditambahkan!');
    }

    public function edit($id)
{
    $kontens = Konten::findOrFail($id);
    return view('pengaduan_2.edit', compact('kontens'));
}

public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Temukan berita berdasarkan ID dan update
    $kontens = Konten::findOrFail($id);
    $kontens->update([
        'title' => $request->input('title'),
        'image' => $request->input('image'),
    ]);

    // Redirect atau return response setelah update
    return redirect()->route('pengaduan_2')->with('success', 'Berita berhasil diperbarui!');
}

public function destroy($id)
{
    $kontens = Konten::findOrFail($id);
    $kontens->delete();

    return redirect()->route('pengaduan_2')->with('success', 'Berita berhasil dihapus!');
}

}

