<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;

class FormController extends Controller
{
    public function tindakankb()
    {
        return view('tindakankb');
    }

    public function postStep1(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nik' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'nik' => $request->nik,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        session(['user_id' => $user->id]);

        return redirect()->route('tindakankb2');
    }

    public function tindakankb2()
    {
        $categories = Category::all(); // Ambil kategori dari database
        return view('tindakankb2', compact('categories'));
    }

    public function postStep2(Request $request)
    {
        $request->validate([
            'status' => 'required',
            'jml_anak' => 'required',
            'umur_anak' => 'required',
            'jml_anggota' => 'required',
            'category' => 'required|exists:categories,id', // Validasi kategori
        ]);

        $user = User::find(session('user_id'));
        $user->update([
            'status' => $request->status,
            'jml_anak' => $request->jml_anak,
            'umur_anak' => $request->umur_anak,
            'jml_anggota' => $request->jml_anggota,
            'category_id' => $request->category, // Simpan kategori_id
        ]);

        return redirect()->route('tindakankb3');
    }

    public function tindakankb3()
    {
        return view('tindakankb3');
    }

    public function postStep3(Request $request)
    {
        $request->validate([
            'keluhan' => 'required',
        ]);

        $user = User::find(session('user_id'));
        $user->update(['keluhan' => $request->keluhan]);

        session()->forget('user_id');

        return redirect()->route('pengaduan')->with('success', 'Data berhasil disimpan!');
    }
    public function pengaduan()
    {
        // Ambil semua data pengguna beserta kategori
        $users = User::with('category')->get(); // Pastikan relasi category ada di model User

        return view('pengaduan', compact('users'));
    }
}

