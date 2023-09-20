<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Geografis;
use App\Models\Wilayah;

class GeografisUserController extends Controller
{
    public function geografis(){
        $geografis = Geografis::all();
        $wilayah = Wilayah::all();
        return view('user.profil.geografis', [
            'data' => $geografis,
            'wilayah' => $wilayah,
            'title' => 'Geografis Kelurahan Kedundung'
        ]);
    }
}
