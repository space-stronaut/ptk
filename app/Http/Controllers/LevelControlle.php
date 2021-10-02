<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class LevelControlle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $level=Level::all();
        return view('Data Master.Level.Data_level', compact('level'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Data Master.Level.Tambah_level');
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
            'kodelevel'=>'required|unique:tbl_level,kode_level|min:1|max:2',
            'namalevel'=>'required',
        ]);

        $level= New Level;
        $level->kode_level=$request->kodelevel;
        $level->nama_level=$request->namalevel;
        $level->save();

        if(!$level){
            return redirect('datalevel')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('datalevel')->with('success', 'Data Berhasil Ditambahkan');
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
        $level = Level::find($id);
        return view('Data Master.Level.Detail_level', compact('level'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $level = Level::findOrFail($id);
        return view('Data Master.Level.Edit_level', compact('level'));
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
            'kodelevel'=>'required|min:1|max:2',
            'namalevel'=>'required',
        ]);

        $level=Level::find($id);
        $level->kode_level=$request->kodelevel;
        $level->nama_level=$request->namalevel;
        $level->save();
        if(!$level){
            return redirect('datalevel')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('datalevel')->with('success', 'Data Berhasil Ditambahkan');
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
