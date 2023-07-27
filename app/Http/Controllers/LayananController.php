<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function p_ahliwaris(){
        return view('user.layanan.p_ahliwaris', 
        ['title'=> 'persyaratan_surat_keterangan_ahli_waris']);
    }
    public function p_nikah(){
        return view('user.layanan.p_nikah', 
        ['title'=> '']);
    }
    public function p_keterangan_usaha(){
        return view('user.layanan.p_keterangan_usaha', 
        ['title'=> '']);
    }
    public function p_skck(){
        return view('user.layanan.p_skck', 
        ['title'=> '']);
    }
    public function p_keterangan_tidakmampu(){
        return view('user.layanan.p_keterangan_tidakmampu', 
        ['title'=> '']);
    }
    public function p_keterangan_bedaidentitas(){
        return view('user.layanan.p_keterangan_bedaidentitas', 
        ['title'=> '']);
    }
    public function p_keterangan_domisili(){
        return view('user.layanan.p_keterangan_domisili', 
        ['title'=> '']);
    }
}
