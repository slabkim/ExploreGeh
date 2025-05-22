<?php

use App\Models\Destinasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\DetailpostController;
use App\Http\Controllers\DetailDestinasiController;
use App\Http\Controllers\KategoriController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        'title'=> 'About Us'
    ]);
});

// ✅ Halaman daftar semua destinasi (ambil dari DestinasiController)
Route::get('/destinasi', [DestinasiController::class, 'index']);

// ✅ Halaman detail destinasi (ambil dari DetailpostController)
Route::get('/destinasi/{slug}', [DetailDestinasiController::class, 'show']);

Route::get('/kategori/{kategori}', [KategoriController::class, 'index'])->name('kategori.index');

//Ulasan customer
Route::post('/ulasan', [UlasanController::class, 'store'])->name('ulasan.store');