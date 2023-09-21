<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LatarGambar;
use Illuminate\Support\Facades\Storage;

class LatarGambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latar = LatarGambar::orderBy('id','asc')->paginate(5);
        return view('admin.admin_crud.latar_gambar.index', compact('latar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $latar = new LatarGambar;
        return view('admin.admin_crud.latar_gambar.tambah', compact('latar'));
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
            'gambar_latar' => 'image|file|max:1024|required',
        ]);

        if ($request->file('gambar_latar')) {
            $image_name = $request->file('gambar_latar')->store('gambar_latar', 'public');
        }

        $latar = new LatarGambar();
        $latar->gambar_latar = $image_name;
        $latar->save();

        return redirect()->route('latar_gambar.index')->with('success', 'Data Latar Gambar Landing Page Berhasil Ditambahkan');
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
        $latar = LatarGambar::find($id);
        return view('admin.admin_crud.latar_gambar.edit', compact('latar'));
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
            'gambar_latar' => 'image|file|max:1024|required',
        ]);

        $latar = LatarGambar::where('id', $id)->first();
        if ($latar->gambar_latar && file_exists(storage_path('app/public/' . $latar->gambar_latar))) {
            Storage::delete('public/' . $latar->gambar_latar);
        }

        $image_name = $request->file('gambar_latar')->store('images', 'public');
        $latar->gambar_latar = $image_name;
        $latar->save();

        return redirect()->route('latar_gambar.index')->with('success', 'Data Latar Gambar Landing Page Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LatarGambar::where('id', $id)->delete();
        return redirect()->route('latar_gambar.index')->with('success', 'Data Latar Gambar Landing Page Berhasil Dihapus');
    }
}
