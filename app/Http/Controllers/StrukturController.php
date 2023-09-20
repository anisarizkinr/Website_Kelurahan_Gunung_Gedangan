<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\struktur;
use App\Models\GambarKepengurusan;

class StrukturController extends Controller
{
    public function struktur(){
        $data = struktur::all();
        $gso = GambarKepengurusan::orderBy('id','asc')->first();
        return view('user.profil.struktur', compact('data','gso'));
    }
}