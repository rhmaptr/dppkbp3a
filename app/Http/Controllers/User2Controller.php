<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Profil;

class User2Controller extends Controller
{

    public function index()
    {
        $profils = Profil::all();
        return view('profil_landing', compact('profils'));
    }
    public function create()
    {
        return view('tambah_profil');
    }

    

 public function store(Request $request)
{
    Log::info($request);
    $request->validate([
        'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'title' => 'required|string|max:255',
    ]);

    $foto = $request->file('foto')->store('profils', 'public');
    Log::info('The Request has been validated');
    Profil::create([
        'foto' => $foto,
        'title' => $request->title,
    ]);

    Log::info('User Created Successfully');
    return redirect()->route('profil_landing')->with('success', 'Data berhasil disimpan!');
}

public function edit($id)
{
    $profils = Profil::findOrFail($id);
    return view('editdokumentasi', compact('profils'));
}

public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'title' => 'required|string|max:255',
    ]);

    // Temukan berita berdasarkan ID dan update
    $profils = Profil::findOrFail($id);
    $profils->update([
        'title' => $request->input('title'),
        'foto' => $request->input('foto'),
    ]);

    // Redirect atau return response setelah update
    return redirect()->route('profil_landing')->with('success', 'Berita berhasil diperbarui!');
}

public function destroy($id)
{
    $profils = Profil::findOrFail($id);
    $profils->delete();

    return redirect()->route('profil_landing')->with('success', 'Berita berhasil dihapus!');
}
}
