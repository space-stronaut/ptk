@extends('Layout.app')
@section('title', 'Kegiatan TENDIK Tambahan')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-text-width"></i>
        Detail Data Kegiatan Tenaga Kependidikan (TENDIK) Tambahan
      </h3>
    </div>
    <div class="card-body">
      <dl class="row">
        <dt class="col-sm-4">Tanggal</dt>
        <dd class="col-sm-8">: {{ $tendiktambahan->tanggal }}</dd>
        <dt class="col-sm-4">Jam/ Waktu</dt>
        <dd class="col-sm-8">: {{ $tendiktambahan->jam_mulai }} - {{ $tendiktambahan->jam_selesai }}</dd>
        <dt class="col-sm-4">Aktifitas</dt>
        <dd class="col-sm-8">: {{ $tendiktambahan->aktifitas }}</dd>
        <dt class="col-sm-4">Isi Kegiatan</dt>
        <dd class="col-sm-8 text">: {{ $tendiktambahan->kegiatan }}</dd>
        <dt class="col-sm-4">Volume Laporan</dt>
        <dd class="col-sm-8">: {{ $tendiktambahan->volume_laporan }}</dd>
        <dt class="col-sm-4">Status Laporan</dt>
        <dd class="col-sm-8">: {{ $tendiktambahan->status }}</dd>
        @if($tendiktambahan->status === "Ditolak")
        <dt class="col-sm-4">Alasan Ditolak</dt>
        <dd class="col-sm-8">: {{ $tendiktambahan->alasan }}</dd>
        @endif
      </dl>
    </div>
    <!-- /.card-body -->
  </div>

  <a href="{{ route('tendiktambahan.index') }}" class="btn btn-success btn-sm "><i class="fas fa-undo"></i> Kembali</a>
  <a href="{{ route('tendiktambahan.edit', $tendiktambahan->id) }}" class="btn btn-warning btn-sm "><i class="fas fa-edit"></i> Edit</a>
@endsection
