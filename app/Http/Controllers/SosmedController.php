<?php

namespace App\Http\Controllers;
use App\Models\sosmed;
use Illuminate\Http\Request;

class SosmedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sosmed = sosmed::all();
        return view('admin.admin_crud.sosmed.index', compact('sosmed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Sosial Media";
        $sosmed = sosmed::all();
        return view('admin.admin_crud.sosmed.tambah', compact('title', 'sosmed'));
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
            'icon' => 'required',
            'link' => 'required',
        ]);
        
        $sosmed = new sosmed();
        $sosmed->icon = $request->icon;
        $sosmed->link = $request->link;
        $sosmed->save();
        return redirect()->route('sosmed.index')->with('success', 'Data Berita Berhasil Ditambahkan');

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
        $title = "Edit Data Sosial Media";
        $sosmed = sosmed::find($id);
        return view('admin.admin_crud.sosmed.edit', compact('title', 'sosmed'));
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
            'icon' => 'required',
            'link' => 'required',
            
        ]);
        // $geografis = Geografis::find($id);
       
        // update data
        $sosmed = Sosmed::where('id', $id)->first();
        $sosmed->icon = $request->get('icon');
        $sosmed->link = $request->get('link');
        $sosmed->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('sosmed.index')
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
        sosmed::where('id', $id)->delete();
        return redirect()->route('sosmed.index')->with('success', 'Data Berhasil Dihapus');
    }
}
