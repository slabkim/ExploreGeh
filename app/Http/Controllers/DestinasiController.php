<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function index(Request $request)
    {
        $kategori = Kategori::all();

        $jumlah = $request->input('jumlah', 5);
        $search = $request->input('search');

        // Query dasar
        $query = Destinasi::with('kategori');

        // Filter pencarian jika ada input search
        if ($search) {
            $query->where('nama', 'like', "%$search%")
                ->orWhere('deskripsi', 'like', "%$search%");
        }

        $destinasi = $query->paginate($jumlah)->withQueryString(); // paginate biar bisa dikombinasi dengan search

        $rekreasi = Kategori::where('nama', 'Rekreasi')->first();
        $pantai = Kategori::where('nama', 'Pantai')->first();
        $gunung = Kategori::where('nama', 'Gunung')->first();
        $staycation = Kategori::where('nama', 'Staycation')->first();

        return view('destinasi', compact(
            'destinasi', 'rekreasi', 'pantai', 'gunung', 'staycation'
        ));
    }
}