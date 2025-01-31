<?php

namespace App\Http\Controllers;

use App\Models\photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all();
        return view('landing', compact('photos'));
    }

    public function create()
    {
        return view('tambah_dokumentasi');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image',
        ]);

        $image = $request->file('image')->store('photos', 'public');
        Photo::create(['image' => $image]);

        return redirect()->route('dokumentasi')->with('success', 'Foto berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $photo = Photo::findOrFail($id);
        $photo->delete();
        return redirect()->route('dokumentasi')->with('success', 'Foto berhasil dihapus!');
    }
}

