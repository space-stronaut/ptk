@extends('Layout.app')
@section('title', 'Kegiatan TUTA Tambahan')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-text-width"></i>
        Detail Data Kegiatan TUTA Tambahan
      </h3>
    </div>
    <div class="card-body">
      <dl class="row">
        <dt class="col-sm-4">Tanggal</dt>
        <dd class="col-sm-8">: {{ $tutatambahan->tanggal }}</dd>
        <dt class="col-sm-4">Jam/ Waktu</dt>
        <dd class="col-sm-8">: {{ $tutatambahan->jam_mulai }} - {{ $tutatambahan->jam_selesai }}</dd>
        <dt class="col-sm-4">Aktifitas</dt>
        <dd class="col-sm-8">: {{ $tutatambahan->aktifitas }}</dd>
        <dt class="col-sm-4">Isi Kegiatan</dt>
        <dd class="col-sm-8 text">: {{ $tutatambahan->kegiatan }}</dd>
        <dt class="col-sm-4">Volume Laporan</dt>
        <dd class="col-sm-8">: {{ $tutatambahan->volume_laporan }}</dd>
        <dt class="col-sm-4">Status Laporan</dt>
        <dd class="col-sm-8">: {{ $tutatambahan->status }}</dd>
        @if($tutatambahan->status === "Ditolak")
        <dt class="col-sm-4">Alasan Ditolak</dt>
        <dd class="col-sm-8">: {{ $tutatambahan->alasan }}</dd>
        @endif
      </dl>
    </div>
    <!-- /.card-body -->
  </div>

  <a href="{{ route('tutatambahan.index') }}" class="btn btn-success btn-sm "><i class="fas fa-undo"></i> Kembali</a>
  <a href="{{ route('tutatambahan.edit', $tutatambahan->id) }}" class="btn btn-warning btn-sm "><i class="fas fa-edit"></i> Edit</a>
@endsection
