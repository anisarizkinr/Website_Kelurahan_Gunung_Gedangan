<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaUserController extends Controller
{
    public function berita(){
        return view('user.informasi.berita', 
        ['title'=> 'berita']);
    }
}
