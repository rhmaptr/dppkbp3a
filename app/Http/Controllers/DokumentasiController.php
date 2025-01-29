<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use Illuminate\Http\Request;

class DokumentasiController extends Controller
{
    public function index()
    {
        $photos = Dokumentasi::all();
        return view('landing', compact('photos'));
    }

    public function create()
    {
        return view('tambah_dokumentasi');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image_path' => 'required|image',
        ]);

        $image = $request->file('image_path')->store('photos', 'public');
        Dokumentasi::create(['image_path' => $image]);

        return redirect()->route('dokumentasi')->with('success', 'Foto berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $photos = Dokumentasi::findOrFail($id);
        $photos->delete();
        return redirect()->route('dokumentasi')->with('success', 'Foto berhasil dihapus!');
    }
}

