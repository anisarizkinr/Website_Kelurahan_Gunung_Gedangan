<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\struktur;

class StrukturController extends Controller
{
    public function struktur(){
        $struktur = struktur::all();
        return view('user.profil.struktur', 
        ['data' => $struktur,]);
    }
}