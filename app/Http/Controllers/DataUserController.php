<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DataUserController extends Controller
{
    public function data(){
        return view('user.data', 
        ['title'=> 'data']);
    }
    
    public function pilihdata()
    {
        $data = Data::all();
        $paginate = Data::orderBy('id', 'asc')->paginate(5);
        return view("admin.admin_crud.tabel_data.pilihdata", compact('data','paginate'));
    }
    
}
