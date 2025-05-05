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
        $destinasi = Destinasi::where('kategori_id', $kategori->id)->get();

        // Pastikan kategori ditemukan
        if (!$kategori) {
            abort(404);
        }

        // Mengembalikan view kategori.blade.php dengan data kategori
        return view('kategori', compact('kategori', 'destinasi'));
    }
}
