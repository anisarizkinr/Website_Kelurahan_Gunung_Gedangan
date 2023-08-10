<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaUserController extends Controller
{
    public function berita(){
        $berita = Berita::all();
        return view('user.informasi.berita', [
            'data' => $berita,
            'title' => 'Berita Kelurahan Kedundung'
        ]);
    }
}
