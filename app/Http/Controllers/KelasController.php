<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas=Kelas::all();
        return view('Data Master.Kelas.Data_kelas', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Data Master.Kelas.Tambah_kelas');
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
            'kodekelas'=>'required|unique:tbl_kelas,kode_kelas|min:2|max:8',
            'namakelas'=>'required',
        ]);

        $kelas= New Kelas;
        $kelas->kode_kelas=$request->kodekelas;
        $kelas->nama_kelas=$request->namakelas;
        $kelas->save();

        if(!$kelas){
            return redirect('datakelas')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('datakelas')->with('success', 'Data Berhasil Ditambahkan');
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
        $kelas = Kelas::find($id);
         return view('Data Master.Kelas.Detail_kelas', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view ('Data Master.Kelas.Edit_kelas', compact('kelas'));
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
            'kodekelas'=>'required|min:2|max:6',
            'namakelas'=>'required',
        ]);

        $kelas=Kelas::find($id);
        $kelas->kode_kelas=$request->kodekelas;
        $kelas->nama_kelas=$request->namakelas;
        $kelas->save();
        if(!$kelas){
            return redirect('datakelas')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('datakelas')->with('success', 'Data Berhasil Ditambahkan');
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
