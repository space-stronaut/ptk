@extends('Layout.app')
@section('title', 'Edit Data Jurusan')

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
              <h3 class="card-title">Form Tambah Data Pendidik/ PTK</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
            <form method="POST" action="{{ route('datajurusan.update', $jurusan->id) }}">
              @csrf
              @method('PUT')
                <div class="form-group">
                  <label for="kodeJurusan">Kode Jurusan</label>
                  <input type="text" class="form-control @error('kodejurusan') is-invalid @enderror" value="{{ old('kodejurusan', $jurusan->kode_jurusan) }}" name="kodejurusan">
                  @error('kodejurusan')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                <div class="form-group">
                  <label for="namaJurusan">Nama Jurusan</label>
                  <input type="text" class="form-control @error('namajurusan') is-invalid @enderror" value="{{ old('namajurusan', $jurusan->nama_jurusan) }}" name="namajurusan">
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