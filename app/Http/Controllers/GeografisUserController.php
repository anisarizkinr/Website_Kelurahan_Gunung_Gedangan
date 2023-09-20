<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Geografis;
use App\Models\Wilayah;
use App\Models\KontakKami;
use App\Models\Maps;

class GeografisUserController extends Controller
{
    public function geografis(){
        $geografis = Geografis::all();
        $wilayah = Wilayah::all();
        $maps = Maps::orderBy('id','asc')->first();
        $kontak = KontakKami::orderBy('id','asc')->first();
        return view('user.profil.geografis', [
            'data' => $geografis,
            'wilayah' => $wilayah,
            'kontak' =>$kontak,
            'maps' =>$maps,
            'title' => 'Geografis Kelurahan Kedundung'
        ]);
    }
}
