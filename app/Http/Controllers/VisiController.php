<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisiController extends Controller
{
    // public function visi()
    // {
    //     return view('user.profil.visi');

    // }



    public function visi(){
        return view('user.profil.visi', 
        ['title'=> 'Visi & Misi Kelurahan Kedundung']);
    }

}
