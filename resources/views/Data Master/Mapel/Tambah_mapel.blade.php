@extends('Layout.app')
@section('title', 'Tambah Mata Pelajaran')

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
            <h3 class="card-title">Form Tambah Data Mata Pelajaran</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <div class="card-body">
          <form action="{{ route('datamapel.store') }}" method="POST">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="kodeMapel">Kode Mata Pelajaran</label>
                <input type="text" name="kodemapel" class="form-control @error('kodemapel') is-invalid @enderror" placeholder="Masukan Kode Mata Pelajaran" value="{{ old('kodemapel') }}">
                @error('kodemapel')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              <div class="form-group">
                <label for="namaMapel">Nama Mata Pelajaran</label>
                <input type="text" name="namamapel" class="form-control @error('namamapel') is-invalid @enderror" placeholder="Masukan Mata Pelajaran" value="{{ old('namamapel') }}">
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