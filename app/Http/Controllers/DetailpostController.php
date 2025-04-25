<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Detailpost;
use Illuminate\Http\Request;

class DetailpostController extends Controller
{
    public function index(){
        return view('destinasi', [
            'title'=> 'Destinasi',
            'posts' => Detailpost::all()
        ]);
    }

    public function show ($slug){
        return view('detail', [
            'title'=>  'Detail Destinasi',
            'post'=> Detailpost::find($slug)
        ]);
    }
}
