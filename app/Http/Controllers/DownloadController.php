<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function download(){
        return view('user.informasi.download', 
        ['title'=> 'download']);
    }
}
