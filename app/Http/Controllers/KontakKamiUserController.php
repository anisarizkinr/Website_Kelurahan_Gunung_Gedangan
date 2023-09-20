<?php

namespace App\Http\Controllers;
use App\Models\KontakKami;
use Illuminate\Http\Request;

class KontakKamiUserController extends Controller
{
    public function kontakkami(){
        $kontakkami = KontakKami::all();
        return view('layout.footer', [
            'data' => $kontakkami,
            'title' => 'KontakKami'
        ]);
    }
}
