<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapel=Mapel::all();
        return view('Data Master.Mapel.Data_mapel', compact('mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Data Master.Mapel.Tambah_mapel');
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
            'kodemapel'=>'required|unique:tbl_mapel,kode_mapel|min:2|max:8',
            'namamapel'=>'required',
        ]);

        $mapel= New Mapel;
        $mapel->kode_mapel=$request->kodemapel;
        $mapel->nama_mapel=$request->namamapel;
        $mapel->save();

        if(!$mapel){
            return redirect('datamapel')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('datamapel')->with('success', 'Data Berhasil Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mapel = Mapel::find($id);
        return view('Data Master.Mapel.Detail_mapel', compact('mapel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mapel = Mapel::findOrFail($id);
        return view ('Data Master.Mapel.Edit_mapel', compact('mapel'));
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
            'kodemapel'=>'required|min:2|max:6',
            'namamapel'=>'required',
        ]);

        $mapel= Mapel::find($id);
        $mapel->kode_mapel=$request->kodemapel;
        $mapel->nama_mapel=$request->namamapel;
        $mapel->save();
        if(!$mapel){
            return redirect('datamapel')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('datamapel')->with('success', 'Data Berhasil Ditambahkan');
        }
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
