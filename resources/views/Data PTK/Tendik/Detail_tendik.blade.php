@extends('layout.app')
@section('title', 'Detail Data Tenaga Kependidikan')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-text-width"></i>
        Data Detail Tenaga Kependidikan
      </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <dl class="row">
        <dt class="col-sm-4">NUPTK/ NIP</dt>
        <dd class="col-sm-8">: {{ $tendik->nuptk_nip }}</dd>
        <dt class="col-sm-4">Nama Lengkap</dt>
        <dd class="col-sm-8">: {{ $tendik->nama_lengkap }}</dd>
        <dt class="col-sm-4">Tempat Lahir</dt>
        <dd class="col-sm-8">: {{ $tendik->tempat_lahir }}</dd>
        <dt class="col-sm-4">Tanggal Lahir</dt>
        <dd class="col-sm-8">: {{ $tendik->tanggal_lahir }}</dd>
        <dt class="col-sm-4">Jenis Kelamin</dt>
        <dd class="col-sm-8">: {{ $tendik->jenis_kelamin }}</dd>
        <dt class="col-sm-4">Nomor HP</dt>
        <dd class="col-sm-8">: {{ $tendik->nomor_hp }}</dd>
        <dt class="col-sm-4">Penugasan/ Jabatan</dt>
        <dd class="col-sm-8">: {{ $tendik->penugasan_jbtn }}</dd>
        <dt class="col-sm-4">Alamat Lengkap</dt>
        <dd class="col-sm-8">: {{ $tendik->alamat }}</dd>
      </dl>
    </div>
    <!-- /.card-body -->
  </div>
  
  <a href="{{ route('datatendik.index') }}" class="btn btn-success btn-sm "><i class="fas fa-undo"></i> Kembali</a>
  <a href="{{ route('datatendik.edit', $tendik->id) }}" class="btn btn-warning btn-sm "><i class="fas fa-edit"></i> Edit</a>
@endsection