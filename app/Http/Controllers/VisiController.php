<?php

namespace App\Http\Controllers;
use App\Models\KontakKami;
use App\Models\Judul;
use App\Models\Maps;
use App\Models\sosmed;
use App\Models\visi;
use Illuminate\Http\Request;

class VisiController extends Controller
{
    public function visi(){
        $kontak = KontakKami::orderBy('id','asc')->first();
        $judul = Judul::orderBy('id','asc')->first();
        $maps = Maps::orderBy('id','asc')->first();
        $sosmed = sosmed::all();
        return view('user.profil.visi', compact('kontak','judul','maps', 'sosmed'));
    }

}
