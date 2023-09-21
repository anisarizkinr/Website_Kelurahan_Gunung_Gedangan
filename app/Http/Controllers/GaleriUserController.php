<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Kontakkami;
use App\Models\Judul;
use App\Models\Maps;

class GaleriUserController extends Controller
{

     //galeri user
     public function galeri(){
        $galeri = Galeri::orderBy('id', 'asc')->paginate(9);
        $kontak = KontakKami::orderBy('id','asc')->first();
        $judul = Judul::orderBy('id','asc')->first();
        $maps = Maps::orderBy('id','asc')->first();
        return view('user.informasi.galeri', 
        ['data' => $galeri,
        'kontak' => $kontak,
        'judul' => $judul,
        'maps' => $maps,
        'title'=> 'Galeri Kelurahan Kedundung']);
    }
}
