<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::all();
        $kategori = Kategori::all();
        $paginate = Data::orderBy('id', 'asc')->paginate(5);
        return view('admin.admin_crud.tabel_data.index', compact('data', 'kategori','paginate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Data:: all();
        $kategori= Kategori::all();
        return view('admin.admin_crud.tabel_data.tambah', compact('data','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $targetKategori = Kategori::where('nama_kategori', $request->id_kategori)->first();

        $request->validate([
            'judul' => 'required',
            'isi_data' => ' required',
        ]);
        // $data['id_kategori'] = $targetKategori->id_kategori;
        // Data::create($data);
        // $kategori = Kategori::all();
        // $data = Data::all();
        $data = new Data();
        $data->id_kategori = $request->id_kategori;
        $data->judul = $request->judul;
        $data->isi_data = $request->isi_data;
        // $data->keterangan = $request->keterangan;
        $data->save();
        return redirect()->route('data.kategori',$data->id_kategori)->with('success', 'Tabel Data Berhasil Ditambahkan');
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
        $data = Data::find($id);
        return view('admin.admin_crud.tabel_data.edit', compact('data'));
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
            'isi_data' => 'required',
        ]);
        $data->id_kategori = $request->get('id_kategori');
        $data->judul = $request->get('judul');
        $data->isi_data = $request->get('isi_data');
        $data->keterangan = $request->get('keterangan');
        $data->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('data.index')
            ->with('success', 'Tabel Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Data::where('id', $id)->delete();
        return redirect()->route('data.index')->with('success', 'Tabel Data Berhasil Dihapus');
    }
}
