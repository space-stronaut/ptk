@extends('layout.app')
@section('title', 'Detail Data Pendidik')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-text-width"></i>
        Data Detail Mata Pelajaran
      </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <dl class="row">
        <dt class="col-sm-4">NUPTK/ NIP</dt>
        <dd class="col-sm-8">: {{ $pendidik->nuptk_nip }}</dd>
        <dt class="col-sm-4">Nama Lengkap</dt>
        <dd class="col-sm-8">: {{ $pendidik->nama_lengkap }}</dd>
        <dt class="col-sm-4">Tempat Lahir</dt>
        <dd class="col-sm-8">: {{ $pendidik->tempat_lahir }}</dd>
        <dt class="col-sm-4">Tanggal Lahir</dt>
        <dd class="col-sm-8">: {{ $pendidik->tanggal_lahir }}</dd>
        <dt class="col-sm-4">Jenis Kelamin</dt>
        <dd class="col-sm-8">: {{ $pendidik->jenis_kelamin }}</dd>
        <dt class="col-sm-4">Nomor HP</dt>
        <dd class="col-sm-8">: {{ $pendidik->nomor_hp }}</dd>
        <dt class="col-sm-4">Penugasan/ Jabatan</dt>
        <dd class="col-sm-8">: {{ $pendidik->penugasan_jbtn }}</dd>
        <dt class="col-sm-4">Alamat Lengkap</dt>
        <dd class="col-sm-8">: {{ $pendidik->alamat }}</dd>
      </dl>
    </div>
    <!-- /.card-body -->
  </div>
  
  <a href="{{ route('datapendidik.index') }}" class="btn btn-success btn-sm "><i class="fas fa-undo"></i> Kembali</a>
  <a href="{{ route('datapendidik.edit', $pendidik->id) }}" class="btn btn-warning btn-sm "><i class="fas fa-edit"></i> Edit</a>
@endsection