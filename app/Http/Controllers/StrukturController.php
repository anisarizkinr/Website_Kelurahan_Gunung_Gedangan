<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\struktur;

class StrukturController extends Controller
{
    public function struktur(){
        $data = struktur::all();
        return view('user.profil.struktur', 
        ['data' => $data,]);
    }
}