<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Kategori;

class DestinasiController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $destinasi = Destinasi::with('kategori')->get(); // ambil semua destinasi beserta relasi kategori
        $rekreasi = Kategori::where('nama', 'Rekreasi')->first();
        $pantai = Kategori::where('nama', 'Pantai')->first();
        $gunung = Kategori::where('nama', 'Gunung')->first();
        $staycation = Kategori::where('nama', 'Staycation')->first();
        return view('destinasi', compact('destinasi', 'rekreasi', 'pantai', 'gunung', 'staycation'));
    }
}