<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DataUserController extends Controller
{
    public function data(){
        $paginate = Kategori::orderBy('id', 'asc')->paginate(5);
        return view('user.data', compact('paginate'));
    }
   
    public function data_user_tabel(Kategori $kategori)
    {
        $data = Data::where('id_kategori', $kategori->id)->paginate(10);
        return view('user.tabel_data', [
            'kategori' => $kategori,
            'data' => $data,
        ]);
    }

    public function data_user_tabel_isi(Kategori $kategori, Data $dt)
    {
            

        $isi_data = Data::where('id_kategori', $kategori->id)->where('id', $dt->id)->first();
                    
        return view('user.isi_tabel_data', [
            'kategori' => $kategori,
            'isi_data' => $isi_data,

            
        ]);
        
    }

    // Admin
    public function pilihdata()
    {
        $kategori = Kategori::all();
        $paginate = Kategori::orderBy('id', 'asc')->paginate(6);
        return view("admin.admin_crud.tabel_data.pilihdata", compact('kategori','paginate'));
    }

    public function indexKategori(Kategori $kategori)
    {
        $data = Data::where('id_kategori', $kategori->id)->paginate(10);
        return view('admin.admin_crud.tabel_data.index_kategori',[
            'kategori' => $kategori,
            'data' => $data,
        ]);
    }

}
