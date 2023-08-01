<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kategori::all();
        $title = 'Kategori data';
        $paginate = Kategori::orderBy('id', 'asc')->paginate(5);
        return view('admin.admin_crud.kategori.index', compact('data','title','paginate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Data Kategori";
        $kategori = new Kategori; 
        return view('admin.admin_crud.kategori.tambah',compact('title','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $testing = Kategori::where('nama_kategori', $request -> nama_kategori)->first();
        $request->validate([
            'nama_kategori' => 'required',
            'gambar' => 'image|file|max:1024|required',
        ]);
        if ($request->file('gambar')) {
            $image_name = $request->file('gambar')->store('gambar', 'public');
        }

        $kategori = new kategori;
        $kategori->nama_kategori = $request->nama_kategori;
        $galeri->gambar = $image_name;
        $kategori->save();

        return redirect()->route('kategori.index')->with('success', 'Data Kategori Berhasil Ditambahkan');
        
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
        $title ="Edit Data Kategori";
        $kategori = Kategori::find($id);
        return view('admin.admin_crud.kegiatan.edit', compact('title', 'kategori'));
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
        $request->validate([
            'gambar' => 'image|file|max:1024|required',
        ]);

        $kategori = Kategori::where('id', $id)->first();
        if ($kategori->gambar && file_exists(storage_path('app/public/' . $kategori->gambar))) {
            Storage::delete('public/' . $kategori->gambar);
        }

        $image_name = $request->file('gambar')->store('images', 'public');
        // update data

        $kategori->gambar = $image_name;
        $kategori->nama_kategori = $nama_kategori;
        $kategori->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('kategori.index')
            ->with('success', 'Data Kategori Berhasil Diupdate');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Galeri::where('id', $id)->delete();
        return redirect()->route('kategori.index')->with('success', 'Data Kategori Berhasil Dihapus');
    }
}
