@extends('layout.app')
@section('title', 'Detail Data Kelas')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-text-width"></i>
        Data Detail Kelas
      </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <dl class="row">
        <dt class="col-sm-4">Kode Kelas</dt>
        <dd class="col-sm-8">: {{ $kelas->kode_kelas }}</dd>
        <dt class="col-sm-4">Nama Kelas</dt>
        <dd class="col-sm-8">: {{ $kelas->nama_kelas }}</dd>
      </dl>
    </div>
    <!-- /.card-body -->
  </div>
  
  <a href="{{ route('datakelas.index') }}" class="btn btn-success btn-sm "><i class="fas fa-undo"></i> Kembali</a>
  <a href="{{ route('datakelas.edit', $kelas->id) }}" class="btn btn-warning btn-sm "><i class="fas fa-edit"></i> Edit</a>
@endsection
