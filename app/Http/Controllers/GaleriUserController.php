<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriUserController extends Controller
{
     //galeri user
     public function galeri(){
        $galeri = Galeri::all();
        return view('user.informasi.galeri', 
        ['data' => $galeri,
        'title'=> 'Galeri Kelurahan Kedundung']);
    }
}
