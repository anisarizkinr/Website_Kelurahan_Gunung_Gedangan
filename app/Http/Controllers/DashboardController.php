<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Kategori;
use App\Models\Galeri;
use App\Models\Berita;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $galeri = Galeri::all()->count();
        $berita= Berita::all()->count();
        $kategori = Kategori::all()->count();
        $data= Data::all()->count();
        return view('admin.admin_crud.dashboard', compact('galeri','berita','kategori','data'));
    }
}
