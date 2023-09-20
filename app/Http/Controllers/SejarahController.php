<?php

namespace App\Http\Controllers;
use App\Models\KontakKami;
use App\Models\Judul;
use Illuminate\Http\Request;


class SejarahController extends Controller
{
    public function sejarah(){
        $kontak = KontakKami::orderBy('id','asc')->first();
        $judul = Judul::orderBy('id','asc')->first();
        return view('user.profil.sejarah', compact('kontak','judul'));
    }
}
