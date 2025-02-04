<?php

namespace App\Http\Controllers;

use App\Models\Poster;
use Illuminate\Http\Request;

class PosterController extends Controller
{
    public function index()
    {
        $poster2s = Poster::all();
        return view('poster', compact('poster2s'));
    }

    public function create()
    {
        return view('tambah_poster');
    }

    public function store(Request $request)
    {
    // Validasi input
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Upload image dan simpan path-nya
    $image = $request->file('image')->store('public/galleries');

    // Simpan data ke database
    Poster::create([
        'image' => $image,
    ]);

        return redirect()->route('poster')->with('success', 'Foto berhasil ditambahkan!');
    }

    public function edit($id)
{
    $poster2s = Poster::findOrFail($id);
    return view('dokumentasi.edit', compact('photos'));
}

public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Temukan berita berdasarkan ID dan update
    $poster2s = Poster::findOrFail($id);
    $poster2s->update([
        'image' => $request->input('image'),
    ]);

    // Redirect atau return response setelah update
    return redirect()->route('poster')->with('success', 'Berita berhasil diperbarui!');
}

public function destroy($id)
{
    $poster2s = Poster::findOrFail($id);
    $poster2s->delete();

    return redirect()->route('poster')->with('success', 'Berita berhasil dihapus!');
}

}

