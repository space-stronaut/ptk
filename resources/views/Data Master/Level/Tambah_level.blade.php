@extends('Layout.app')
@section('title', 'Tambah Data Level')

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
            <h3 class="card-title">Form Tambah Data Level</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <div class="card-body">
          <form action="{{ route('datalevel.store') }}" method="POST">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="kodeLevel">Kode Level</label>
                <input type="text" name="kodelevel" class="form-control @error('kodelevel') is-invalid @enderror" placeholder="Masukan Kode Level" value="{{ old('kodelevel') }}">
                @error('kodelevel')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              <div class="form-group">
                <label for="namaLevel">Nama Level</label>
                <input type="text" name="namalevel" class="form-control @error('namalevel') is-invalid @enderror" placeholder="Masukan Nama Level" value="{{ old('namalevel') }}">
                @error('namalevel')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <a href="{{ route('datalevel.index') }}" class="btn btn-success btn-sm "><i class="fas fa-undo"></i> Kembali</a>
              <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
@endsection