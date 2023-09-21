<?php

namespace App\Http\Controllers;

use App\Models\layanan;
use App\Models\KontakKami;
use App\Models\Judul;
use App\Models\Maps;
use App\Models\sosmed;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function pilih_layanan(){
        $layanan = layanan::orderBy('id','asc')->paginate(6);
        $kontak = KontakKami::orderBy('id','asc')->first();
        $judul = Judul::orderBy('id','asc')->first();
        $maps = Maps::orderBy('id','asc')->first();
        $sosmed = sosmed::all();
        return view('user.layanan.persyaratan', compact('layanan','kontak','judul','maps','sosmed'));
    }
    public function isi_layanan($id){
        $layanan1 = Layanan::find($id);
        $kontak = KontakKami::orderBy('id','asc')->first();
        $judul = Judul::orderBy('id','asc')->first();
        $maps = Maps::orderBy('id','asc')->first();
        $sosmed = sosmed::all();
        return view('user.layanan.isi_persyaratan', [
            'layanan' => $layanan1,
            'kontak' => $kontak,
            'judul'=> $judul,
            'maps'=> $maps,
            'sosmed' => $sosmed,
            
        ]);
    }
}
