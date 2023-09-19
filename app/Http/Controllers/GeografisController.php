<?php

namespace App\Http\Controllers;
use App\Models\Geografis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GeografisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $geografis = Geografis::all();
        $title = 'Data Geografis';
        $paginate = Geografis::orderBy('id', 'asc')->paginate(5);

        return view(
            'admin.admin_crud.geografis.index',
            compact('geografis', 'title', 'paginate')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Jumlah Penduduk";
        $geografis = Geografis::all();
        return view('admin.admin_crud.geografis.tambah', compact('title', 'geografis'));
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
            'jumlah_penduduk' => 'required',
            'keterangan' => 'required',
        ]);
        
        $geografis = new Geografis();
        $geografis->jumlah_penduduk = $request->jumlah_penduduk;
        $geografis->keterangan = $request->keterangan;
        $geografis->save();
        return redirect()->route('geografis.index')->with('success', 'Data Berita Berhasil Ditambahkan');




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
            $title = "Edit Data Geografis";
            $geografis = Geografis::find($id);
            return view('admin.admin_crud.geografis.edit', compact('title', 'geografis'));
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
            'jumlah_penduduk' => 'required',
            'keterangan' => 'required',
            
        ]);
        // $geografis = Geografis::find($id);
       
        // update data
        $geografis = Geografis::where('id', $id)->first();
        $geografis->jumlah_penduduk = $request->get('jumlah_penduduk');
        $geografis->keterangan = $request->get('keterangan');
        $geografis->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('geografis.index')
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
        Geografis::where('id', $id)->delete();
        return redirect()->route('geografis.index')->with('success', 'Data Berhasil Dihapus');
    }
}
