<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function sejarah(){
        return view('user.profil.sejarah', 
        ['title'=> 'Sejarah Kelurahan Kedundung']);
    }
}
