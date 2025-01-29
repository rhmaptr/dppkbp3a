<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;

class FotoController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $path = $request->file('foto')->store('foto', 'public'); // Simpan foto di folder `storage/app/public/foto`

    Foto::create([
        'path' => $path,
    ]);

    return redirect()->back()->with('success', 'Foto berhasil diupload');
}

}
