<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PencapaianController extends Controller
{
    public function pencapaian(){
        return view('user.pencapaian', 
        ['title'=> 'pencapaian']);
    }
}
