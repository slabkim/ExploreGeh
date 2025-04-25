<?php

// app/Http/Controllers/UlasanController.php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'ulasan' => 'required|string',
            'destinasi_id' => 'required|exists:destinasi,id',
        ]);

        // Simpan ulasan
        Ulasan::create($validated);

        // Kembali ke halaman detail destinasi setelah ulasan berhasil disimpan
        return redirect()->back()->with('success', 'Ulasan berhasil dikirim!');
    }
}