<?php

namespace App\Http\Controllers;
use App\Models\KontakKami;
use App\Models\Judul;
use App\Models\Maps;
use App\Models\Sejarah;
use App\Models\sosmed;
use Illuminate\Http\Request;


class SejarahController extends Controller
{
    public function sejarah(){
        $kontak = KontakKami::orderBy('id','asc')->first();
        $judul = Judul::orderBy('id','asc')->first();
        $maps = Maps::orderBy('id','asc')->first();
        $sejarah = Sejarah::all();
        $sosmed = sosmed::all();
        return view('user.profil.sejarah', compact('kontak','judul', 'maps', 'sejarah','sosmed'));
    }
}
