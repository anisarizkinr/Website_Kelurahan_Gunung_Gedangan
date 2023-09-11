<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriUserController extends Controller
{

     //galeri user
     public function galeri(){
        $galeri = Galeri::orderBy('id', 'asc')->paginate(9);
        return view('user.informasi.galeri', 
        ['data' => $galeri,
        'title'=> 'Galeri Kelurahan Kedundung']);
    }
}
