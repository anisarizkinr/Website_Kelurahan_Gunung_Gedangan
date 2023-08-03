<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataUserController extends Controller
{
    public function data(){
        return view('user.data', 
        ['title'=> 'data']);
    }
}
