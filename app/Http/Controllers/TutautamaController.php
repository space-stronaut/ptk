<?php

namespace App\Http\Controllers;

use App\Models\Kegtuta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TutautamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutautamas=Kegtuta::where('keterangan' , 'utama')->get();
        return view('Tuta.Kegiatan Utama.Data_kegiatan', compact('tutautamas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tuta.Kegiatan Utama.Tambah_kegiatan');
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
            // 'nuptk'=>'required|max:18',
            // 'namalengkap'=>'required',
        ]);

        $tutautama= New Kegtuta;
        $tutautama->tanggal=$request->tanggal;
        $tutautama->jam_mulai=$request->jam_mulai;
        $tutautama->jam_selesai=$request->jam_selesai;
        $tutautama->aktifitas=$request->aktifitas;
        $tutautama->kegiatan=$request->kegiatan;
        $tutautama->keterangan=$request->keterangan;
        $tutautama->volume_laporan=$request->volume_laporan;
        $tutautama->status=$request->status;
        $tutautama->user_id=Auth::user()->id;
        $tutautama->save();

        if(!$tutautama){
            return redirect('tutautama')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('tutautama')->with('success', 'Data Berhasil Ditambahkan');
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
        $tutautama = Kegtuta::find($id);
        return view('Tuta.Kegiatan Utama.Detail_kegiatan', compact('tutautama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tutautama = Kegtuta::findOrFail($id);
        return view('Tuta.Kegiatan Utama.Edit_kegiatan', compact('tutautama'));
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
            // 'nuptk'=>'required|max:18',
            'kegiatan'=>'required',
        ]);

        $tutautama= Kegtuta::find($id);
        $tutautama->tanggal=$request->tanggal;
        $tutautama->jam_mulai=$request->jam_mulai;
        $tutautama->jam_selesai=$request->jam_selesai;
        $tutautama->aktifitas=$request->aktifitas;
        $tutautama->kegiatan=$request->kegiatan;
        $tutautama->keterangan=$request->keterangan;
        $tutautama->volume_laporan=$request->volume_laporan;
        $tutautama->status=$request->status;
        $tutautama->user_id=Auth::user()->id;
        $tutautama->save();

        if(!$tutautama){
            return redirect('tutautama')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('tutautama')->with('success', 'Data Berhasil Ditambahkan');
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
