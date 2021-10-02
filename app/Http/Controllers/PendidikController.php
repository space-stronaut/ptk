<?php

namespace App\Http\Controllers;

use App\Models\Pendidik;
use Illuminate\Http\Request;

class PendidikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendidik=Pendidik::all();
        return view('Data PTK.Pendidik.Data_pendidik', compact('pendidik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Data PTK.Pendidik.Tambah_pendidik');
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

        $pendidik= New Pendidik;
        $pendidik->nuptk_nip=$request->nuptk;
        $pendidik->nama_lengkap=$request->namalengkap;
        $pendidik->tempat_lahir=$request->tempatlahir;
        $pendidik->tanggal_lahir=$request->tanggallahir;
        $pendidik->jenis_kelamin=$request->jeniskelamin;
        $pendidik->nomor_hp=$request->nomorhp;
        $pendidik->email=$request->email;
        $pendidik->penugasan_jbtn=$request->jabatan;
        $pendidik->alamat=$request->alamatlengkap;
        $pendidik->save();

        if(!$pendidik){
            return redirect('datapendidik')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('datapendidik')->with('success', 'Data Berhasil Ditambahkan');
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
        $pendidik = Pendidik::find($id);
        return view('Data PTK.Pendidik.Detail_pendidik', compact('pendidik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendidik = Pendidik::findOrFail($id);
        return view('Data PTK.Pendidik.Edit_pendidik', compact('pendidik'));
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

        $pendidik= Pendidik::find($id);
        $pendidik->nuptk_nip=$request->nuptk;
        $pendidik->nama_lengkap=$request->namalengkap;
        $pendidik->tempat_lahir=$request->tempatlahir;
        $pendidik->tanggal_lahir=$request->tanggallahir;
        $pendidik->jenis_kelamin=$request->jeniskelamin;
        $pendidik->nomor_hp=$request->nomorhp;
        $pendidik->email=$request->email;
        $pendidik->penugasan_jbtn=$request->jabatan;
        $pendidik->alamat=$request->alamatlengkap;
        $pendidik->save();

        if(!$pendidik){
            return redirect('datapendidik')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('datapendidik')->with('success', 'Data Berhasil Ditambahkan');
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
