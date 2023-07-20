<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VidioController extends Controller
{
    public function vidio(){
        return view('user.informasi.vidio', 
        ['title'=> 'vidio']);
    }
}
