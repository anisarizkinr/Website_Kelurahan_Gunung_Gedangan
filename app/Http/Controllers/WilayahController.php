<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wilayah;
use Illuminate\Support\Facades\Storage;
class WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wilayah = Wilayah::all();
        $paginate = Wilayah::orderBy('id', 'asc')->paginate(5);

        return view(
            'admin.admin_crud.wilayah.index',
            compact('wilayah', 'paginate')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $wilayah = Wilayah::find($id);
        return view('admin.admin_crud.wilayah.edit', compact('wilayah'));
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
            // 'gambar_arah' => 'image|file|max:1024',
            'batas_wilayah' => 'required',
            'deskripsi' => 'required',
            'link' => 'required',
        ]);

        $wilayah = Wilayah::where('id', $id)->first();
        if ($wilayah->gambar_arah && file_exists(storage_path('app/public/' . $wilayah->gambar_arah))) {
            Storage::delete('public/' . $wilayah->gambar_arah);
        }

        $image_name = $request->file('gambar_arah')->store('gambar_arah', 'public');
        // update data

        $wilayah->gambar_arah = $image_name; 
        $wilayah->batas_wilayah = $request->get('batas_wilayah');
        $wilayah->deskripsi = $request->get('deskripsi');   
        $wilayah->link = $request->get('link');
        $wilayah->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('wilayah.index')
            ->with('success', 'Data wilayah Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Wilayah::where('id', $id)->delete();
        return redirect()->route('wilayah.index')->with('success', 'Data Wilayah Berhasil Dihapus');
    }
}
