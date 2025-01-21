<?php

namespace App\Http\Controllers;

use App\Models\User; // Mengimpor model User
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function pengaduan()
    {
        // Ambil semua data pengguna
        $users = User::all();

        // Kirim data ke view
        return view('pengaduan', compact('users'));
    }
}
