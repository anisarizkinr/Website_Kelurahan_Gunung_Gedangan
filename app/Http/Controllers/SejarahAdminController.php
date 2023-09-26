<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Illuminate\Http\Request;

class SejarahAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sejarah = Sejarah::all();
        $paginate = Sejarah::orderBy('id', 'asc')->paginate(5);

        return view(
            'admin.admin_crud.sejarah.index',
            compact('sejarah', 'paginate')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Data Sejarah";
        $sejarah = Sejarah::all();
        return view('admin.admin_crud.sejarah.tambah', compact('title', 'sejarah'));
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
            'isi_sejarah' => 'required',
        ]);

        $sejarah = new Sejarah();
        $sejarah->isi_sejarah = $request->isi_sejarah;
        $sejarah->save();

        return redirect()->route('sejarah.index')->with('success', 'Data Sejarah Berhasil Ditambahkan');
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
        $sejarah = Sejarah::find($id);
        return view('admin.admin_crud.sejarah.edit', compact('sejarah'));
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
            'isi_sejarah' => 'required'
        ]);

        $sejarah = Sejarah::where('id', $id)->first();
        $sejarah->isi_sejarah = $request->get('isi_sejarah');
        $sejarah->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('sejarah.index')
            ->with('success', 'Data Sejarah Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sejarah::where('id', $id)->delete();
        return redirect()->route('sejarah.index')->with('success', 'Data Berita Berhasil Dihapus');
    }
}
