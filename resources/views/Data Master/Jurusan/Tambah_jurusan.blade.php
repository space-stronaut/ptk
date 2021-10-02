@extends('Layout.app')
@section('title', 'Tambah Data')

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
            <h3 class="card-title">Form Tambah Data Jurusan</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <div class="card-body">
          <form action="{{ route('datajurusan.store') }}" method="POST">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="kodeJurusan">Kode Jurusan</label>
                <input type="text" name="kodejurusan" class="form-control @error('kodejurusan') is-invalid @enderror" placeholder="Masukan Kode Jurusan" value="{{ old('kodejurusan') }}">
                @error('kodejurusan')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              <div class="form-group">
                <label for="namaJurusan">Nama Jurusan</label>
                <input type="text" name="namajurusan" class="form-control @error('namajurusan') is-invalid @enderror" placeholder="Masukan Nama Jurusan" value="{{ old('namajurusan') }}">
                @error('namajurusan')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <a href="{{ route('datajurusan.index') }}" class="btn btn-success btn-sm "><i class="fas fa-undo"></i> Kembali</a>
              <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
@endsection