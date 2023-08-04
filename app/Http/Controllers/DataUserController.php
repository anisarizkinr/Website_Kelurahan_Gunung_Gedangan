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
    
    public function pilihdata()
    {
        $kategori = Kategori::all();
        $paginate = Kategori::orderBy('id', 'asc')->paginate(6);
        return view("admin.admin_crud.tabel_data.pilihdata", compact('kategori','paginate'));
    }
    
}
