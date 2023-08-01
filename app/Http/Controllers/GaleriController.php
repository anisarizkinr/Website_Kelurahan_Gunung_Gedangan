<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            $galeri = Galeri::all();
            $title = 'Data Galeri';
            $paginate = Galeri::orderBy('id', 'asc')->paginate(5);
    
            return view(
                'admin.admin_crud.galeri.index',
                compact('galeri', 'title', 'paginate')
            );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
            $title = "Tambah Data Galeri";
            $galeri = Galeri::all();
            return view('admin.admin_crud.galeri.tambah', compact('title', 'galeri'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'gambar' => 'image|file|max:1024|required',
        ]);

        if ($request->file('gambar')) {
            $image_name = $request->file('gambar')->store('gambar', 'public');
        }

        $galeri = new Galeri();
        $galeri->gambar = $image_name;
        $galeri->save();

        return redirect()->route('galeri.index')->with('success', 'Data Galeri Berhasil Ditambahkan');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        {
            $title = "Edit Data Galeri";
            $galeri = Galeri::find($id);
            return view('admin.admin_crud.galeri.edit', compact('title', 'galeri'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
