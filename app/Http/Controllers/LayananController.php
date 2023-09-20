<?php

namespace App\Http\Controllers;

use App\Models\layanan;
use App\Models\KontakKami;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function pilih_layanan(){
        $layanan = layanan::orderBy('id','asc')->paginate(6);
        $kontak = KontakKami::orderBy('id','asc')->first();
        return view('user.layanan.persyaratan', compact('layanan','kontak'));
    }
    public function isi_layanan($id){
        $layanan1 = Layanan::find($id);
        $kontak = KontakKami::orderBy('id','asc')->first();
        return view('user.layanan.isi_persyaratan', [
            'layanan' => $layanan1,
            'kontak' => $kontak
            
        ]);
    }
}
