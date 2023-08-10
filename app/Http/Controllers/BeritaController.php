<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        $title = 'Data Berita';
        $paginate = Berita::orderBy('id', 'asc')->paginate(5);

        return view(
            'admin.admin_crud.berita.index',
            compact('berita', 'title', 'paginate')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Data Berita";
        $berita = Berita::all();
        return view('admin.admin_crud.berita.tambah', compact('title', 'berita'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar_berita' => 'image|file|max:1024|required',
            'tanggal_berita' => 'required|date',
            'judul_berita' => 'required',
            'isi_berita' => 'required',
            'link' => 'required',

        ]);
        if ($request->file('gambar_berita')) {
            $image_name = $request->file('gambar_berita')->store('gambar_berita', 'public');
        }

        $berita = new Berita();
        $berita->gambar_berita = $image_name;
        $berita->tanggal_berita = $request->tanggal_berita;
        $berita->judul_berita = $request->judul_berita;
        $berita->isi_berita = $request->isi_berita;
        $berita->link = $request->link;
        $berita->save();

        return redirect()->route('berita.index')->with('success', 'Data Berita Berhasil Ditambahkan');
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
            $title = "Edit Data Berita";
            $berita = Berita::find($id);
            return view('admin.admin_crud.berita.edit', compact('title', 'berita'));
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
            'gambar_berita' => 'image|file|max:1024|required',
            'tanggal_berita' => 'required|date',
            'judul_berita' => 'required',
            'isi_berita' => 'required',
            'link' => 'required',
        ]);

        $berita = Berita::where('id', $id)->first();
        if ($berita->gambar_berita && file_exists(storage_path('app/public/' . $berita->gambar_berita))) {
            Storage::delete('public/' . $berita->gambar_berita);
        }

        $image_name = $request->file('gambar_berita')->store('gambar_berita', 'public');
        // update data

        $berita->gambar_berita = $image_name;
        $berita->tanggal_berita = $request->get('tanggal_berita');
        $berita->judul_berita = $request->get('judul_berita');
        $berita->isi_berita = $request->get('isi_berita');
        $berita->link = $request->get('link');
        $berita->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('berita.index')
            ->with('success', 'Data Berita Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Berita::where('id', $id)->delete();
        return redirect()->route('berita.index')->with('success', 'Data Berita Berhasil Dihapus');
    }
}
