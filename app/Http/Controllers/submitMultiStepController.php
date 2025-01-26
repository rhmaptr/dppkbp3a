<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class submitMultiStepController extends Controller
{
    public function submitMultiStep(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'nik' => 'required|digits:16|unique:users,nik',
        'ttl' => 'required|date',
        'alamat' => 'required|string|max:255',
        'no_hp' => 'required|regex:/^[0-9]{10,15}$/',
        'status' => 'required|string',
        'jml_anak' => 'required|integer|min:0',
        'umur_anak' => 'required|integer|min:0',
        'jml_anggota' => 'required|integer|min:1',
        'category' => 'required|exists:categories,id',
        'keluhan' => 'required|string|max:1000',
    ]);

    User::create([
        'name' => $request->name,
        'nik' => $request->nik,
        'ttl' => $request->ttl,
        'alamat' => $request->alamat,
        'no_hp' => $request->no_hp,
        'status' => $request->status,
        'jml_anak' => $request->jml_anak,
        'umur_anak' => $request->umur_anak,
        'jml_anggota' => $request->jml_anggota,
        'category_id' => $request->category,
        'keluhan' => $request->keluhan,
    ]);

    return redirect()->route('pengaduan')->with('success', 'Data berhasil disimpan!');
}

public function adminData()
{
    $users = User::select('id', 'name', 'nik', 'ttl', 'alamat')->get(); // Ambil data tertentu
    return view('pengaduan', compact('users'));
}

public function adminDetail($id)
{
    $user = User::with('category')->findOrFail($id); // Ambil detail pengguna berdasarkan ID
    return view('detail', compact('user'));
}


}
