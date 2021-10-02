<?php

namespace App\Http\Controllers;

use App\Models\Kegtuta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TutatambahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutatambahans=Kegtuta::where('keterangan' , 'tambahan')->where('user_id', Auth::user()->id)->get();
        return view('Tuta.Kegiatan Tambahan.Data_kegiatan', compact('tutatambahans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tuta.Kegiatan Tambahan.Tambah_kegiatan');
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

        $tutatambahan= New Kegtuta;
        $tutatambahan->tanggal=$request->tanggal;
        $tutatambahan->jam_mulai=$request->jam_mulai;
        $tutatambahan->jam_selesai=$request->jam_selesai;
        $tutatambahan->aktifitas=$request->aktifitas;
        $tutatambahan->kegiatan=$request->kegiatan;
        $tutatambahan->keterangan=$request->keterangan;
        $tutatambahan->volume_laporan=$request->volume_laporan;
        $tutatambahan->status=$request->status;
        $tutatambahan->user_id=Auth::user()->id;
        $tutatambahan->save();

        if(!$tutatambahan){
            return redirect('tutatambahan')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('tutatambahan')->with('success', 'Data Berhasil Ditambahkan');
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
        $tutatambahan = Kegtuta::find($id);
        return view('Tuta.Kegiatan Tambahan.Detail_kegiatan', compact('tutatambahan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tutatambahan = Kegtuta::findOrFail($id);
        return view('Tuta.Kegiatan Tambahan.Edit_kegiatan', compact('tutatambahan'));
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

        $tutatambahan= Kegtuta::find($id);
        $tutatambahan->tanggal=$request->tanggal;
        $tutatambahan->jam_mulai=$request->jam_mulai;
        $tutatambahan->jam_selesai=$request->jam_selesai;
        $tutatambahan->aktifitas=$request->aktifitas;
        $tutatambahan->kegiatan=$request->kegiatan;
        $tutatambahan->keterangan=$request->keterangan;
        $tutatambahan->volume_laporan=$request->volume_laporan;
        $tutatambahan->status=$request->status;
        $tutatambahan->user_id=Auth::user()->id;
        $tutatambahan->save();

        if(!$tutatambahan){
            return redirect('tutatambahan')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('tutatambahan')->with('success', 'Data Berhasil Ditambahkan');
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
