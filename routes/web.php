<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        "title" => "profile",
        "nama" => "Farhat",
        "nohp" => "0818657584",
        "foto" => "images/132098-1700211169.webp",
    ]);
});

Route::get('/berita', function () {

    $data_berita = [
        [
            "judul" => "news 1",
            "penulis" => "kane",
            "konten" => "apakah benar",
        ],
        [
            "judul" => "news 2",
            "penulis" => "wowo",
            "konten" => "mana sikritnya",
        ],
        [
            "judul" => "news 3",
            "penulis" => "tukang bubut naik haji",
            "konten" => "alhamdulillah",
        ],
    ];
    return view('berita', [
        "title" => "berita",
        "berita" => $data_berita,
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});