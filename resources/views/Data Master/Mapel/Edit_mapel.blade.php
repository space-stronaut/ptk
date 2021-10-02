@extends('Layout.app')
@section('title', 'Edit Data Mata Pelajaran')

@section('content')
    <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Edit Data Mata Pelajaran</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
            <form method="POST" action="{{ route('datamapel.update', $mapel->id) }}">
              @csrf
              @method('PUT')
                <div class="form-group">
                  <label for="kodeMapel">Kode Mata Pelajaran</label>
                  <input type="text" class="form-control @error('kodemapel') is-invalid @enderror" value="{{ old('kodemapel', $mapel->kode_mapel) }}" name="kodemapel">
                  @error('kodemapel')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                <div class="form-group">
                  <label for="namaMapel">Nama Mata Pelajaran</label>
                  <input type="text" class="form-control @error('namamapel') is-invalid @enderror" value="{{ old('namamapel', $mapel->nama_mapel) }}" name="namamapel">
                  @error('namamapel')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <a href="{{ route('datamapel.index') }}" class="btn btn-success btn-sm "><i class="fas fa-undo"></i> Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
@endsection