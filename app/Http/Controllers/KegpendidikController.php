<?php

namespace App\Http\Controllers;

use App\Models\Kegpendidik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class KegpendidikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegpendidiks=Kegpendidik::where('keterangan' , 'utama')->where('user_id', Auth::user()->id)->get();
        return view('Kegiatan Pendidik.Kegiatan Utama.Data_kegiatan', compact('kegpendidiks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Kegiatan Pendidik.Kegiatan Utama.Tambah_kegiatan');
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

        $kegpendidik= New Kegpendidik;
        $kegpendidik->tanggal=$request->tanggal;
        $kegpendidik->jam_mulai=$request->jam_mulai;
        $kegpendidik->jam_selesai=$request->jam_selesai;
        $kegpendidik->aktifitas=$request->aktifitas;
        $kegpendidik->kegiatan=$request->kegiatan;
        $kegpendidik->keterangan=$request->keterangan;
        $kegpendidik->volume_laporan=$request->volume_laporan;
        $kegpendidik->status=$request->status;
        $kegpendidik->user_id=Auth::user()->id;
        $kegpendidik->save();

        if(!$kegpendidik){
            return redirect('kegiatanpendidik')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('kegiatanpendidik')->with('success', 'Data Berhasil Ditambahkan');
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
        $kegpendidik = Kegpendidik::find($id);
        return view('Kegiatan Pendidik.Kegiatan Utama.Detail_kegiatan', compact('kegpendidik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kegpendidik = Kegpendidik::findOrFail($id);
        return view('Kegiatan Pendidik.Kegiatan Utama.Edit_kegiatan', compact('kegpendidik'));
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

        $kegpendidik= Kegpendidik::find($id);
        $kegpendidik->tanggal=$request->tanggal;
        $kegpendidik->jam_mulai=$request->jam_mulai;
        $kegpendidik->jam_selesai=$request->jam_selesai;
        $kegpendidik->aktifitas=$request->aktifitas;
        $kegpendidik->kegiatan=$request->kegiatan;
        $kegpendidik->keterangan=$request->keterangan;
        $kegpendidik->volume_laporan=$request->volume_laporan;
        $kegpendidik->status=$request->status;
        $kegpendidik->user_id=Auth::user()->id;
        $kegpendidik->save();

        if(!$kegpendidik){
            return redirect('kegiatanpendidik')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('kegiatanpendidik')->with('success', 'Data Berhasil Ditambahkan');
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

    public function cari()
    {
        $kegpendidiks=Kegpendidik::where('user_id', Auth::user()->id)->get();
        return view('laporan', compact('kegpendidiks'));
    }

    public function search(Request $request)
    {
      $cari = $request->cari;
      $kegpendidiks=Kegpendidik::where('tanggal', 'like', '%'.$cari.'%')->where('user_id', Auth::user()->id)->get();

      return view('laporan', compact('kegpendidiks'));
    }

    public function print(Request $request)
    {
        $author = $request->author;
        $jenis = $request->jenis;
        $penugasan = $request->penugasan;
        $tanggal = $request->tanggal;
        if ($tanggal) {
            $kegiatans = Kegpendidik::where('tanggal', $tanggal)->get();
        }else{
            $kegiatans = Kegpendidik::all();
        }
 
    	$pdf = PDF::loadview('Kegiatan Pendidik.Kegiatan Utama.Print_Kegiatan',compact('author', 'jenis', 'penugasan', 'tanggal', 'kegiatans'));
    	return $pdf->download('kegiatan.pdf');
    }
}
