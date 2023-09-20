<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\KontakKami;

class BeritaUserController extends Controller
{
    public function berita(){
        $berita = Berita::all();
        $kontak = KontakKami::orderBy('id','asc')->first();
        return view('user.informasi.berita', [
            'data' => $berita,
            'kontak'=> $kontak,
            'title' => 'Berita Kelurahan Kedundung'
        ]);
    }
}
