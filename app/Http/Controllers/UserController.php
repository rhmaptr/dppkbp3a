<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function pengaduan()
    {
        $users = User::all();
        return view('pengaduan', compact('users'));
    }
}