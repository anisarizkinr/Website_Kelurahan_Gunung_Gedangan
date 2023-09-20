<?php

namespace App\Http\Controllers;
use App\Models\KontakKami;
use Illuminate\Http\Request;

class VisiController extends Controller
{
    // public function visi()
    // {
    //     return view('user.profil.visi');

    // }



    public function visi(){
        $kontak = KontakKami::orderBy('id','asc')->first();
        return view('user.profil.visi', compact('kontak'));
    }

}
