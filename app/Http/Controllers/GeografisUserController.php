<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Geografis;

class GeografisUserController extends Controller
{
    public function geografis(){
        $geografis = Geografis::all();
        return view('user.profil.geografis', [
            'data' => $geografis,
            'title' => 'Geografis Kelurahan Kedundung'
        ]);
    }
}
