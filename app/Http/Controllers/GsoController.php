<?php

namespace App\Http\Controllers;

use App\Models\GambarKepengurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GsoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gso = GambarKepengurusan::orderBy('id','asc')->paginate(5);
        return view('admin.admin_crud.gambar_so.index',compact('gso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gso = new GambarKepengurusan;
        return view('admin.admin_crud.gambar_so.tambah',compact('gso'));
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
            'gambar_so' => 'image|file|max:1024|required',
        ]);
        if ($request->file('gambar_so')) {
            $image_name = $request->file('gambar_so')->store('gambar_so', 'public');
        }

        $gambar_so = new GambarKepengurusan;
        $gambar_so->gambar_so = $image_name;
        $gambar_so->save();

        return redirect()->route('gso.index')->with('success', 'Data Gambar Berhasil Ditambahkan');
        
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
        $gso = GambarKepengurusan::find($id);
        return view('admin.admin_crud.gambar_so.edit', compact('gso'));
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
            'gambar_so' => 'image|file|max:1024|required',
        ]);

        $gambar_so = GambarKepengurusan::where('id', $id)->first();
        if ($gambar_so->gambar_so && file_exists(storage_path('app/public/' . $gambar_so->gambar_so))) {
            Storage::delete('public/' . $gambar_so->gambar_so);
        }

        $image_name = $request->file('gambar_so')->store('images', 'public');
        // update data

        $gambar_so->gambar_so = $image_name;
        $gambar_so->save();

        return redirect()->route('gso.index')
            ->with('success', 'Data Gambar Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GambarKepengurusan::where('id', $id)->delete();
        return redirect()->route('gso.index')->with('success', 'Data Gambar Struktur Organisasi Berhasil Dihapus');
    }
}
