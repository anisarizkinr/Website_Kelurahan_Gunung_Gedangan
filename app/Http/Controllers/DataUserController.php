<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Kategori;
use App\Models\KontakKami;
use Illuminate\Http\Request;

class DataUserController extends Controller
{
    public function data(){
        $paginate = Kategori::orderBy('id', 'asc')->paginate(6);
        $kontak = KontakKami::orderBy('id','asc')->first();
        return view('user.data', compact('paginate', 'kontak'));
    }
   
    public function data_user_tabel(Kategori $kategori)
    {
        $data = Data::where('id_kategori', $kategori->id)->paginate(10);
        $kontak = KontakKami::orderBy('id','asc')->first();
        return view('user.tabel_data', [
            'kategori' => $kategori,
            'data' => $data,
            'kontak' => $kontak
        ]);
    }
    
    public function data_user_tabel_isi(Kategori $kategori, $id)
    {
        $isi_data = Data::where('id_kategori', $kategori->id)->where('id', $id)->first();
        $kontak = KontakKami::orderBy('id','asc')->first();
        return view('user.isi_tabel_data', [
            'kategori' => $kategori,
            'isi_data' => $isi_data,
            'kontak' => $kontak
        ]);
    }

    // public function data_user_tabel_isi(Kategori $kategori, Data $dt)
    // {
    //     $isi_data = Data::where('id_kategori', $kategori->id)->where('id', $dt->id)->first();
                    
    //     return view('user.isi_tabel_data', [
    //         'kategori' => $kategori,
    //         'isi_data' => $isi_data,   
    //     ]); 
    // }

    // Admin
    public function pilihdata()
    {
        $kategori = Kategori::all();
        $paginate = Kategori::orderBy('id', 'asc')->paginate(6);
        $kontak = KontakKami::orderBy('id','asc')->first();
        return view("admin.admin_crud.tabel_data.pilihdata", compact('kategori','paginate', 'kontak'));
    }

    public function indexKategori(Kategori $kategori)
    {
        $data = Data::where('id_kategori', $kategori->id)->paginate(10);
        $kontak = KontakKami::orderBy('id','asc')->first();
        return view('admin.admin_crud.tabel_data.index_kategori',[
            'kategori' => $kategori,
            'data' => $data,
            'kontak' => $kontak
        ]);
    }

}
