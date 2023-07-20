<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StrukturController extends Controller
{
    public function struktur(){
        return view('user.profil.struktur', 
        ['title'=> 'Struktur Pemerintahan']);
    }
}
