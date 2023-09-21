<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visi;

class VisiAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visi = Visi::all();
        $paginate= Visi::orderBy('id', 'asc')->paginate(5);

        return view(
            'admin.admin_crud.visi.index',
            compact('visi', 'paginate')
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
        $visi = Visi::find($id);
        return view('admin.admin_crud.visi.edit', compact('visi'));
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
            'isi_vm' => 'required'
        ]);

        $visi = Visi::where('id', $id)->first();
        $visi->judul = $request->get('judul');
        $visi->isi_vm = $request->get('isi_vm');
        $visi->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('visi.index')
            ->with('success', 'Data Visi Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
