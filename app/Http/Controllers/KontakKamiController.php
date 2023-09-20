<?php

namespace App\Http\Controllers;
use App\Models\KontakKami;
use Illuminate\Http\Request;

class KontakKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontakkami = KontakKami::all();
        $title = 'Kontak';
        $paginate = KontakKami::orderBy('id', 'asc')->paginate(5);

        return view(
            'admin.admin_crud.kontakkami.index',
            compact('kontakkami', 'title', 'paginate')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Kontak";
        $kontakkami = KontakKami::all();
        return view('admin.admin_crud.kontakkami.tambah', compact('title', 'kontakkami'));
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
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
        ]);
        
        $kontakkami = new Geografis();
        $kontakkami->alamat = $request->alamat;
        $kontakkami->telepon = $request->telepon;
        $kontakkami->save();
        return redirect()->route('kontakkami.index')->with('success', 'Data Berita Berhasil Ditambahkan');
        
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
        $title = "Edit Data Kontak";
        $kontakkami = KontakKami::find($id);
        return view('admin.admin_crud.kontakkami.edit', compact('title', 'kontakkami'));
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
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            
        ]);
        // $geografis = Geografis::find($id);
       
        // update data
        $kontakkami = KontakKami::where('id', $id)->first();
        $kontakkami->jumlah_penduduk = $request->get('alamat');
        $kontakkami->telepon = $request->get('telepon');
        $kontakkami->email = $request->get('email');
        $kontakkami->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('kontakkami.index')
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
        KontakKami::where('id', $id)->delete();
        return redirect()->route('kontakkami.index')->with('success', 'Data Berhasil Dihapus');
    }
}
