<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminAuthController extends Controller
{

    function index()
    {
        return view('login');
    }
    // Fungsi untuk login admin
    function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required'],
        [
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong'
        ]);

        // Cari admin berdasarkan username
        $admin = Admin::where('username', $request->username)->first();

        // Periksa apakah admin ditemukan dan password valid
        if ($admin && Hash::check($request->password, $admin->password)) {
            // Redirect ke halaman beranda setelah login berhasil
            return redirect()->route('beranda');
        }

        return response()->json(['message' => 'Nama pengguna atau kata sandi salah'], 401);
    }
}