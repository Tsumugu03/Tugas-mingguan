<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BeritaController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        "title" => "Profile",
        "nama" => "Farhat Kasyiful Kurob",
        "nohp" => "085800661620",
        "foto" => "images/132098-1700211169.webp",
    ]);
});

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class,'tampildata']);

Route::get('/datamahasiswa', [MahasiswaController::class,'index'])->name('datamahasiswa');
Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'])->name('mahasiswa.tambah');
Route::post('/insertdata', [MahasiswaController::class, 'insertdata'])->name('insertdata');


Route::get('/tampildata/{id}',[MahasiswaController::class, 'tampildata'])->name('tampildata');

Route::post('/editdata/{id}',[MahasiswaController::class, 'editdata'])->name('editdata');

Route::get('/delete/{id}', [MahasiswaController::class, 'delete'])->name('mahasiswa.delete');

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});