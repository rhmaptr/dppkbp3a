<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
public function loadAllUsers() {
    $all_users = Login::all(); // Ambil semua pengguna
    return view('login', ['users' => $all_users]); // Kirim data pengguna ke tampilan
    }
}