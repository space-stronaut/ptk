<?php

namespace App\Http\Controllers;

use App\Models\Kegtendik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TendikutamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tendikutamas = Kegtendik::Where('keterangan', 'utama')->where('user_id', Auth::user()->id)->get();
        return view('Kegiatan Tendik.Kegiatan Utama.Data_kegiatan', compact('tendikutamas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Kegiatan Tendik.Kegiatan Utama.Tambah_kegiatan');
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

        $tendikutama= New Kegtendik;
        $tendikutama->tanggal=$request->tanggal;
        $tendikutama->jam_mulai=$request->jam_mulai;
        $tendikutama->jam_selesai=$request->jam_selesai;
        $tendikutama->aktifitas=$request->aktifitas;
        $tendikutama->kegiatan=$request->kegiatan;
        $tendikutama->keterangan=$request->keterangan;
        $tendikutama->volume_laporan=$request->volume_laporan;
        $tendikutama->status=$request->status;
        $tendikutama->user_id=Auth::user()->id;
        $tendikutama->save();

        if(!$tendikutama){
            return redirect('tendikutama')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('tendikutama')->with('success', 'Data Berhasil Ditambahkan');
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
        $tendikutama = Kegtendik::find($id);
        return view('Kegiatan Tendik.Kegiatan Utama.Detail_kegiatan', compact('tendikutama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tendikutama = Kegtendik::findOrFail($id);
        return view('Kegiatan Tendik.Kegiatan Utama.Edit_kegiatan', compact('tendikutama'));
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

        $tendikutama= Kegtendik::find($id);
        $tendikutama->tanggal=$request->tanggal;
        $tendikutama->jam_mulai=$request->jam_mulai;
        $tendikutama->jam_selesai=$request->jam_selesai;
        $tendikutama->aktifitas=$request->aktifitas;
        $tendikutama->kegiatan=$request->kegiatan;
        $tendikutama->keterangan=$request->keterangan;
        $tendikutama->volume_laporan=$request->volume_laporan;
        $tendikutama->status=$request->status;
        $tendikutama->user_id=Auth::user()->id;
        $tendikutama->save();

        if(!$tendikutama){
            return redirect('tendikutama')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('tendikutama')->with('success', 'Data Berhasil Ditambahkan');
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
