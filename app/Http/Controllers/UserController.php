<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function beranda()
    {
        return view('user.beranda');
    }

    public function properti()
    {
        return view('user.properti');

    }
    public function tentang()
    {
        return view('user.tentang');

    }

    public function servis()
    {
        return view('user.servis');

    }
    public function kontak()
    {
        return view('user.kontak');

    }
}
