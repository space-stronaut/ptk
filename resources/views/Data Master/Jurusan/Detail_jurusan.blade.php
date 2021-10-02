@extends('layout.app')
@section('title', 'Detail Data Jurusan')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-text-width"></i>
        Data Detail Jurusan
      </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <dl class="row">
        <dt class="col-sm-4">Kode Jurusan</dt>
        <dd class="col-sm-8">: {{ $jurusan->kode_jurusan }}</dd>
        <dt class="col-sm-4">Nama Jurusan</dt>
        <dd class="col-sm-8">: {{ $jurusan->nama_jurusan }}</dd>
      </dl>
    </div>
    <!-- /.card-body -->
  </div>
  
  <a href="{{ route('datajurusan.index') }}" class="btn btn-success btn-sm "><i class="fas fa-undo"></i> Kembali</a>
  <a href="{{ route('datajurusan.edit', $jurusan->id) }}" class="btn btn-warning btn-sm "><i class="fas fa-edit"></i> Edit</a>
@endsection
