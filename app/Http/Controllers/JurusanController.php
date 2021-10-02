<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusans=Jurusan::all();
        return view('Data Master.Jurusan.Data_jurusan', compact('jurusans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Data Master.Jurusan.Tambah_jurusan');
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
            'kodejurusan'=>'required|unique:tbl_jurusan,kode_jurusan|min:2|max:6',
            'namajurusan'=>'required',
        ]);

        $jurusans= New Jurusan;
        $jurusans->kode_jurusan=$request->kodejurusan;
        $jurusans->nama_jurusan=$request->namajurusan;
        $jurusans->save();

        if(!$jurusans){
            return redirect('datajurusan')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('datajurusan')->with('success', 'Data Berhasil Ditambahkan');
        }
        
        // return redirect('datajurusan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $jurusan = Jurusan::find($id);
         return view('Data Master.Jurusan.Detail_jurusan', compact('jurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view ('Data Master.Jurusan.Edit_jurusan', compact('jurusan'));
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
            'kodejurusan'=>'required|min:2|max:6',
            'namajurusan'=>'required',
        ]);

        $jurusans=Jurusan::find($id);
        $jurusans->kode_jurusan=$request->kodejurusan;
        $jurusans->nama_jurusan=$request->namajurusan;
        $jurusans->save();
        if(!$jurusans){
            return redirect('datajurusan')->with('error', 'Data Gagal Ditambahkan');
        }
        else{
            return redirect('datajurusan')->with('success', 'Data Berhasil Ditambahkan');
        }
        // return redirect('datajurusan');
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
