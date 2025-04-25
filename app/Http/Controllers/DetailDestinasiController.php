<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;

class DetailDestinasiController extends Controller
{
    public function show($slug)
    {
        $destinasi = Destinasi::with('kategori')->where('slug', $slug)->firstOrFail();
        $destinasi = Destinasi::with('ulasans')->where('slug', $slug)->firstOrFail();

        return view('detail', compact('destinasi'));
    }
}
