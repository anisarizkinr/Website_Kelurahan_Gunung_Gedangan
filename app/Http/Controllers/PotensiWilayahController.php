<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PotensiWilayahController extends Controller
{
    public function potensiwilayah(){
        return view('user.profil.potensiwilayah', 
        ['title'=> 'potensi']);
    }
}
