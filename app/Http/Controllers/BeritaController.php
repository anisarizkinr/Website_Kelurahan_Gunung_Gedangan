<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function berita(){
        return view('user.informasi.berita', 
        ['title'=> 'berita']);
    }
}
