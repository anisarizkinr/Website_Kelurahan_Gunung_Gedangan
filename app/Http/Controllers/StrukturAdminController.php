<?php

namespace App\Http\Controllers;

use App\Models\struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class StrukturAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $struktur = struktur::all();
        $paginate = struktur::orderBy('id', 'asc')->paginate(5);

        return view(
            'admin.admin_crud.struktur.index',
            compact('struktur', 'paginate')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $struktur = struktur::all();
        return view('admin.admin_crud.struktur.tambah', compact('struktur'));
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
            'nama_pengurus' => 'required',
            'gambar_pengurus' => 'image|file|max:1024|required',
            'jabatan' => 'required',
        ]);
        if ($request->file('gambar_pengurus')) {
            $image_name = $request->file('gambar_pengurus')->store('gambar_pengurus', 'public');
        }

        $struktur = new struktur();
        $struktur->nama_pengurus = $request->nama_pengurus;
        $struktur->gambar_pengurus = $image_name;       
        $struktur->jabatan = $request->jabatan;
        $struktur->save();

        return redirect()->route('struktur.index')->with('success', 'Data Struktur Berhasil Ditambahkan');
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
        $struktur = struktur::find($id);
        return view('admin.admin_crud.struktur.edit', compact('struktur'));
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
            'nama_pengurus' => 'required',
            'gambar_pengurus' => 'image|file|max:1024|required',
            'jabatan' => 'required',
        ]);

        $struktur = struktur::where('id', $id)->first();
        if ($struktur->gambar_pengurus && file_exists(storage_path('app/public/' . $struktur->gambar_pengurus))) {
            Storage::delete('public/' . $struktur->gambar_pengurus);
        }

        $image_name = $request->file('gambar_pengurus')->store('gambar_pengurus', 'public');
        // update data

        $struktur->nama_pengurus = $request->get('nama_pengurus');
        $struktur->gambar_pengurus = $image_name;     
        $struktur->jabatan = $request->get('jabatan');
        $struktur->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('struktur.index')
            ->with('success', 'Data struktur Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        struktur::where('id', $id)->delete();
        return redirect()->route('struktur.index')->with('success', 'Data Struktur Berhasil Dihapus');
    }
}
