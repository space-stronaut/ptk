@extends('layout.app')
@section('title', 'Detail Data Level')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-text-width"></i>
        Data Detail Level
      </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <dl class="row">
        <dt class="col-sm-4">Kode Level</dt>
        <dd class="col-sm-8">: {{ $level->kode_level }}</dd>
        <dt class="col-sm-4">Nama Level</dt>
        <dd class="col-sm-8">: {{ $level->nama_level }}</dd>
      </dl>
    </div>
    <!-- /.card-body -->
  </div>
  
  <a href="{{ route('datalevel.index') }}" class="btn btn-success btn-sm "><i class="fas fa-undo"></i> Kembali</a>
  <a href="{{ route('datalevel.edit', $level->id) }}" class="btn btn-warning btn-sm "><i class="fas fa-edit"></i> Edit</a>
@endsection
