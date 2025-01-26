<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function pengaduan()
    {
        // Ambil semua data pengguna
        $users = User::all();

        // Kirim data ke view
        return view('pengaduan', compact('users'));
    }
}
