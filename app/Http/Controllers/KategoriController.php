<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinasi;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index($kategori)
{
    $kategori = Kategori::where('nama', $kategori)->first();

    // Pastikan kategori ditemukan
    if (!$kategori) {
        abort(404);
    }

    $destinasi = Destinasi::where('kategori_id', $kategori->id)->get();

    // Ambil kategori lain selain yang sedang ditampilkan
    $kategoriLain = Kategori::where('id', '!=', $kategori->id)->get();

    return view('kategori', compact('kategori', 'destinasi', 'kategoriLain'));
}

}