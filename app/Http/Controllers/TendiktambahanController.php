<?php

namespace App\Http\Controllers;

use App\Models\Kegtendik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TendiktambahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tendiktambahans=Kegtendik::where('keterangan' , 'tambahan')->where('user_id', Auth::user()->id)->get();
        return view('Kegiatan Tendik.Kegiatan Tambahan.Data_kegiatan', compact('tendiktambahans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Kegiatan Tendik.Kegiatan Tambahan.Tambah_kegiatan');
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

        $tendiktambahan= New Kegtendik;
        $tendiktambahan->tanggal=$request->tanggal;
        $tendiktambahan->jam_mulai=$request->jam_mulai;
        $tendiktambahan->jam_selesai=$request->jam_selesai;
        $tendiktambahan->aktifitas=$request->aktifitas;
        $tendiktambahan->kegiatan=$request->kegiatan;
        $tendiktambahan->keterangan=$request->keterangan;
        $tendiktambahan->volume_laporan=$request->volume_laporan;
        $tendiktambahan->status=$request->status;
        $tendiktambahan->user_id=Auth::user()->id;
        $tendiktambahan->save();

        if(!$tendiktambahan){
            return redirect('tendiktambahan')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('tendiktambahan')->with('success', 'Data Berhasil Ditambahkan');
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
        $tendiktambahan = Kegtendik::find($id);
        return view('Kegiatan Tendik.Kegiatan Tambahan.Detail_kegiatan', compact('tendiktambahan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tendiktambahan = Kegtendik::findOrFail($id);
        return view('Kegiatan Tendik.Kegiatan Tambahan.Edit_kegiatan', compact('tendiktambahan'));
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

        $tendiktambahan= Kegtendik::find($id);
        $tendiktambahan->tanggal=$request->tanggal;
        $tendiktambahan->jam_mulai=$request->jam_mulai;
        $tendiktambahan->jam_selesai=$request->jam_selesai;
        $tendiktambahan->aktifitas=$request->aktifitas;
        $tendiktambahan->kegiatan=$request->kegiatan;
        $tendiktambahan->keterangan=$request->keterangan;
        $tendiktambahan->volume_laporan=$request->volume_laporan;
        $tendiktambahan->status=$request->status;
        $tendiktambahan->user_id=Auth::user()->id;
        $tendiktambahan->save();

        if(!$tendiktambahan){
            return redirect('tendiktambahan')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('tendiktambahan')->with('success', 'Data Berhasil Ditambahkan');
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
