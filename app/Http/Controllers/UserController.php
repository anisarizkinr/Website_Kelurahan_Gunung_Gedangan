<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class UserController extends Controller
{
    public function beranda()
    {
        $berita = Berita::all();
        return view('user.beranda', ['data' => $berita]);
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
