<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Geografis;
use App\Models\Wilayah;
use App\Models\KontakKami;

class GeografisUserController extends Controller
{
    public function geografis(){
        $geografis = Geografis::all();
        $wilayah = Wilayah::all();
        $kontak = KontakKami::orderBy('id','asc')->first();
        return view('user.profil.geografis', [
            'data' => $geografis,
            'wilayah' => $wilayah,
            'kontak' =>$kontak,
            'title' => 'Geografis Kelurahan Kedundung'
        ]);
    }
}
