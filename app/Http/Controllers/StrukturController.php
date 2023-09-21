<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\struktur;
use App\Models\KontakKami;
use App\Models\GambarKepengurusan;
use App\Models\Judul;
use App\Models\Maps;

class StrukturController extends Controller
{
    public function struktur(){
        $data = struktur::all();
        $gso = GambarKepengurusan::orderBy('id','asc')->first();
        $kontak = KontakKami::orderBy('id','asc')->first();
        $judul = Judul::orderBy('id','asc')->first();
        $maps = Maps::orderBy('id','asc')->first();
        return view('user.profil.struktur', compact('data','gso', 'kontak','judul','maps'));
    }
}