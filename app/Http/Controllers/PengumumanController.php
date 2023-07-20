<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function pengumuman(){
        return view('user.informasi.pengumuman', 
        ['title'=> 'pengumuman']);
    }
}
