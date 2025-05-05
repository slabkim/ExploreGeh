<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinasi;
use App\Models\Kategori;
class HomeController extends Controller
{
    public function index() {
        $kategori = Kategori::all();

        // Ambil destinasi spesifik berdasarkan nama
        $pantaiKlara = Destinasi::where('nama', 'Pantai Clara')->first();
        $radisson = Destinasi::where('nama', 'Radisson Bandar Lampung')->first();
        $pesagi = Destinasi::where('nama', 'Gunung Pesagi')->first();
        $rajabasa = Destinasi::where('nama', 'Gunung Rajabasa')->first();
        $ringgung = Destinasi::where('nama', 'Pantai Sari Ringgung')->first();
        $tanjungsetia = Destinasi::where('nama', 'Pantai Tanjung Setia')->first();
        $mutun = Destinasi::where('nama', 'Pantai Mutun')->first();
        $gigihiu = Destinasi::where('nama', 'Pantai Gigi Hiu')->first();
        $krakatau = Destinasi::where('nama', 'Taman Krakatau')->first();
        $kambas = Destinasi::where('nama', 'Taman Nasional Way Kambas')->first();
        $embung = Destinasi::where('nama', 'Embung Unila')->first();
        $sakura = Destinasi::where('nama', 'Bukit Sakura')->first();
        $radisson = Destinasi::where('nama', 'Radisson Bandar Lampung')->first();
        $rekreasi = Kategori::where('nama', 'Rekreasi')->first();
        $pantai = Kategori::where('nama', 'Pantai')->first();
        $gunung = Kategori::where('nama', 'Gunung')->first();
        $staycation = Kategori::where('nama', 'Staycation')->first();

        return view('home', compact('kategori', 'pantaiKlara', 'radisson', 'pesagi', 'rajabasa', 'ringgung',
        'tanjungsetia', 'mutun','gigihiu','krakatau','kambas','embung','sakura','radisson','rekreasi', 'pantai', 'gunung', 'staycation'
    ));
    }

}