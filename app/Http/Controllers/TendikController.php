<?php

namespace App\Http\Controllers;

use App\Models\Tendik;
use Illuminate\Http\Request;

class TendikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tendik=Tendik::all();
        return view('Data PTK.Tendik.Data_tendik', compact('tendik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Data PTK.Tendik.Tambah_tendik');
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
            'nuptk'=>'required|max:18',
            'namalengkap'=>'required',
        ]);

        $tendik= New Tendik;
        $tendik->nuptk_nip=$request->nuptk;
        $tendik->nama_lengkap=$request->namalengkap;
        $tendik->tempat_lahir=$request->tempatlahir;
        $tendik->tanggal_lahir=$request->tanggallahir;
        $tendik->jenis_kelamin=$request->jeniskelamin;
        $tendik->nomor_hp=$request->nomorhp;
        $tendik->email=$request->email;
        $tendik->penugasan_jbtn=$request->jabatan;
        $tendik->alamat=$request->alamatlengkap;
        $tendik->save();

        if(!$tendik){
            return redirect('datatendik')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('datatendik')->with('success', 'Data Berhasil Ditambahkan');
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
        $tendik= Tendik::find($id);
        return view('Data PTK.Tendik.Detail_tendik', compact('tendik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tendik = Tendik::findOrFail($id);
        return view('Data PTK.Tendik.Edit_tendik', compact('tendik'));
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
            'nuptk'=>'required|max:18',
            'namalengkap'=>'required',
        ]);

        $tendik= Tendik::find($id);
        $tendik->nuptk_nip=$request->nuptk;
        $tendik->nama_lengkap=$request->namalengkap;
        $tendik->tempat_lahir=$request->tempatlahir;
        $tendik->tanggal_lahir=$request->tanggallahir;
        $tendik->jenis_kelamin=$request->jeniskelamin;
        $tendik->nomor_hp=$request->nomorhp;
        $tendik->penugasan_jbtn=$request->jabatan;
        $tendik->alamat=$request->alamatlengkap;
        $tendik->save();

        if(!$tendik){
            return redirect('datatendik')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('datatendik')->with('success', 'Data Berhasil Ditambahkan');
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
