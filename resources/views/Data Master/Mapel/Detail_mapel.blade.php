@extends('layout.app')
@section('title', 'Detail Data Mata Pelajaran')

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
        <dt class="col-sm-4">Kode Mata Pelajaran</dt>
        <dd class="col-sm-8">: {{ $mapel->kode_mapel }}</dd>
        <dt class="col-sm-4">Nama Mapel</dt>
        <dd class="col-sm-8">: {{ $mapel->nama_mapel }}</dd>
      </dl>
    </div>
    <!-- /.card-body -->
  </div>
  
  <a href="{{ route('datamapel.index') }}" class="btn btn-success btn-sm "><i class="fas fa-undo"></i> Kembali</a>
  <a href="{{ route('datamapel.edit', $mapel->id) }}" class="btn btn-warning btn-sm "><i class="fas fa-edit"></i> Edit</a>
@endsection
