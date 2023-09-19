<?php

namespace App\Http\Controllers;

use App\Models\layanan;
use Illuminate\Http\Request;

class LayananAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan = layanan::orderBy('id','asc')->paginate(5);
        return view('admin.admin_crud.layanan.index', compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $layanan = new Layanan; 
        return view('admin.admin_crud.layanan.tambah',compact('layanan'));
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
            'judul' => 'required',
            'isi_layanan' => 'required',
        ]);

        $layanan = new layanan;
        $layanan->judul = $request->judul;
        $layanan->isi_layanan = $request->isi_layanan;
        $layanan->save();

        return redirect()->route('layanan.index')->with('success', 'Layanan Baru Berhasil Ditambahkan');
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
        $layanan = layanan::find($id);
        return view('admin.admin_crud.layanan.edit', compact('layanan'));
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
            'judul' => 'required',
            'isi_layanan' => 'required',
        ]);

        $layanan = layanan::where('id', $id)->first();
        $layanan->judul = $request->get('judul');
        $layanan->isi_layanan = $request->get('isi_layanan');
        $layanan->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('layanan.index')
            ->with('success', 'Data Layanan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        layanan::where('id', $id)->delete();
        return redirect()->route('layanan.index')->with('success', 'Data Layanan Berhasil Dihapus');
    }
}
