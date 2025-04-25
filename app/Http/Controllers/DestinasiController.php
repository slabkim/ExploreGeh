<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;

class DestinasiController extends Controller
{
    public function index()
    {
        $destinasi = Destinasi::with('kategori')->get(); // ambil semua destinasi beserta relasi kategori
        return view('destinasi', compact('destinasi'));
    }
}