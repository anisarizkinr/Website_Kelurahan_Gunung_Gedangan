<?php

namespace App\Http\Controllers;

use App\Models\layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function pilih_layanan(){
        $layanan = layanan::orderBy('id','asc')->paginate(6);
        return view('user.layanan.persyaratan', compact('layanan'));
    }
    public function isi_layanan($id){
        $layanan1 = Layanan::find($id);
        return view('user.layanan.isi_persyaratan', [
            'layanan' => $layanan1
        ]);
    }
}
