<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maps;
class MapsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maps = Maps::all();
        $paginate = Maps::orderBy('id', 'asc')->paginate(5);

        return view(
            'admin.admin_crud.maps.index',
            compact('maps', 'paginate')
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
        $maps = Maps::find($id);
        return view('admin.admin_crud.maps.edit', compact('maps'));
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
            'link' => 'required',
        ]);

        $maps = Maps::where('id', $id)->first();
        $maps->link = $request->get('link');
        $maps->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('maps.index')
            ->with('success', 'Data Maps Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Maps::where('id', $id)->delete();
        return redirect()->route('maps.index')->with('success', 'Data Maps Berhasil Dihapus');
    }
}
