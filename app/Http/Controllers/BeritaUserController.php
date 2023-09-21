<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\KontakKami;
use App\Models\Judul;
use App\Models\Maps;

class BeritaUserController extends Controller
{
    public function berita(){
        $berita = Berita::all();
        $kontak = KontakKami::orderBy('id','asc')->first();
        $judul = Judul::orderBy('id','asc')->first();
        $maps = Maps::orderBy('id','asc')->first();
        return view('user.informasi.berita', [
            'data' => $berita,
            'kontak'=> $kontak,
            'judul'=> $judul,
            'maps' => $maps,
        ]);
    }
}
