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
        $kategori = Kategori::all();
        $title = 'Kategori data';
        $paginate = Kategori::orderBy('id', 'asc')->paginate(5);
        return view('admin.admin_crud.kategori.index', compact('kategori','title','paginate'));
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
            'gambar_kategori' => 'image|file|max:1024|required',
        ]);
        if ($request->file('gambar_kategori')) {
            $image_name = $request->file('gambar_kategori')->store('gambar_kategori', 'public');
        }

        $kategori = new kategori;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->gambar_kategori = $image_name;
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
            'nama_kategori' => 'required',
            'gambar_kategori' => 'image|file|max:1024|required',
        ]);

        $kategori = Kategori::where('id', $id)->first();
        if ($kategori->gambar_kategori && file_exists(storage_path('app/public/' . $kategori->gambar_kategori))) {
            Storage::delete('public/' . $kategori->gambar_kategori);
        }

        $image_name = $request->file('gambar_kategori')->store('images', 'public');
        // update data

        $kategori->gambar_kategori = $image_name;
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
