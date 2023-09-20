<?php

namespace App\Http\Controllers;
use App\Models\KontakKami;
use Illuminate\Http\Request;


class SejarahController extends Controller
{
    public function sejarah(){
        $kontak = KontakKami::orderBy('id','asc')->first();
        return view('user.profil.sejarah', compact('kontak'));
    }
}
