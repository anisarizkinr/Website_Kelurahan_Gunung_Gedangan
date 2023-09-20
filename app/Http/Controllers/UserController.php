<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\struktur;
use App\Models\Geografis;
use App\Models\KontakKami;

class UserController extends Controller
{
    public function beranda()
    {
        $berita = Berita::all();
        $struktur = Struktur::all();
        $geografis = Geografis::all();
        $kontak = KontakKami::orderBy('id','asc')->first();
        return view('user.beranda', ['data' => $berita, 'struktur'=>$struktur, 'geografis'=>$geografis, 'kontak'=>$kontak]);
    }

    public function properti()
    {
        return view('user.properti');

    }
    public function tentang()
    {
        return view('user.tentang');

    }

    public function servis()
    {
        return view('user.servis');

    }
    public function kontak()
    {
        return view('user.kontak');

    }
    
}
