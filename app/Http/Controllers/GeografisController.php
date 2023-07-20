<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeografisController extends Controller
{
    public function geografis(){
        return view('user.profil.geografis', 
        ['title'=> 'Geografis dan Kependudukan ']);
    }
}
