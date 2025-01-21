<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Tampilkan berita di halaman admin
    public function adminIndex()
    {
        $news = News::latest()->get();
        return view('admin.news.index', compact('news'));
    }

    // Form untuk menambahkan berita
    public function create()
    {
        return view('admin.news.create');
    }

    // Simpan berita
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('news', 'public');
        }

        News::create($data);

        return redirect()->route('admin.news.index')->with('success', 'News added successfully');
    }

    // Tampilkan berita di halaman user
    public function userIndex()
    {
        $news = News::latest()->paginate(5); // Pagination
        return view('news.index', compact('news'));
    }
}

