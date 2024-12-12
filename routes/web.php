<?php

use Illuminate\Support\Facades\Route;

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/tindakankb', function () {
    return view('tindakankb');
});

Route::get('/tindakankb2', function () {
    return view('tindakankb2');
});

Route::get('/tindakankb3', function () {
    return view('tindakankb3');
});

Route::get('/tindakanpp', function () {
    return view('tindakanpp');
});

Route::get('/tindakanpp2', function () {
    return view('tindakanpp2');
});

Route::get('/tindakanpp3', function () {
    return view('tindakanpp3');
});

Route::get('/tindakanpa', function () {
    return view('tindakanpa');
});

Route::get('/tindakanpa2', function () {
    return view('tindakanpa2');
});

Route::get('/tindakanpa3', function () {
    return view('tindakanpa3');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/popup_simpan', function () {
    return view('popup_simpan');
});

Route::get('/popup_hapus', function () {
    return view('popup_hapus');
});

Route::get('/program', function () {
    return view('program');
});