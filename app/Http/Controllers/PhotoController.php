<?php

namespace App\Http\Controllers;

use App\Models\photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all();
        return view('dokumentasi', compact('photos'));
    }

    public function create()
    {
        return view('tambah_dokumentasi');
    }

    public function store(Request $request)
    {
    // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload image dan simpan path-nya
        $image = $request->file('image')->store('photos', 'public');

        // Simpan data ke database
        Photo::create([
            'title' => $request->title,
            'image' => $image,
        ]);

        return redirect()->route('dokumentasi')->with('success', 'Foto berhasil ditambahkan!');
    }

    public function edit($id)
{
    $photos = Photo::findOrFail($id);
    return view('editdokumentasi', compact('photos'));
}

public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Temukan berita berdasarkan ID dan update
    $photos = Photo::findOrFail($id);
    $photos->update([
        'title' => $request->input('title'),
        'image' => $request->input('image'),
    ]);

    // Redirect atau return response setelah update
    return redirect()->route('dokumentasi')->with('success', 'Berita berhasil diperbarui!');
}

public function destroy($id)
{
    $photos = Photo::findOrFail($id);
    $photos->delete();

    return redirect()->route('dokumentasi')->with('success', 'Berita berhasil dihapus!');
}

}

