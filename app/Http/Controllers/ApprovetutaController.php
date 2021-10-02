<?php

namespace App\Http\Controllers;

use App\Models\Kegtuta;
use Illuminate\Http\Request;

class ApprovetutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tutaUtama()
    {
        $approvetutas = Kegtuta::where('keterangan' , 'utama')->get();
        return view('Approve.approvetuta', compact('approvetutas'));
    }

    public function tutaTambahan()
    {
        $approvetutas = Kegtuta::where('keterangan' , 'tambahan')->get();
        return view('Approve.approvetuta', compact('approvetutas'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $laporans = Kegtuta::find($id)->update([
            "status" => $request->status,
            "alasan" => $request->alasan
        ]);

        return redirect()->back();
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
