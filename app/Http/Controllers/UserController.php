<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\struktur;
use App\Models\Geografis;
use App\Models\KontakKami;
use App\Models\sosmed;
use App\Models\Judul;
use App\Models\Maps;
use App\Models\LatarGambar;

class UserController extends Controller
{
    public function beranda()
    {
        $berita = Berita::all();
        $struktur = Struktur::all();
        $geografis = Geografis::all();
        $kontak = KontakKami::orderBy('id','asc')->first();
        $sosmed = sosmed::all();
        $judul = Judul::orderBy('id','asc')->first();
        $maps = Maps::orderBy('id','asc')->first();
        $latar = LatarGambar::all();
        return view('user.beranda', [
            'data' => $berita, 
            'struktur'=>$struktur, 
            'geografis'=>$geografis, 
            'kontak'=>$kontak,
            'sosmed'=>$sosmed,
            'judul'=>$judul,
            'maps'=>$maps,
            'latar'=> $latar,
        ]);
    }
    
}
