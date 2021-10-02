@extends('Layout.app')
@section('title', 'Edit Data Level')

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
              <h3 class="card-title">Form Edit Data Level</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
            <form method="POST" action="{{ route('datalevel.update', $level->id) }}">
              @csrf
              @method('PUT')
                <div class="form-group">
                  <label for="kodeLevel">Kode Level</label>
                  <input type="text" class="form-control @error('kodelevel') is-invalid @enderror" value="{{ old('kodelevel', $level->kode_level) }}" name="kodelevel">
                  @error('kodelevel')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                <div class="form-group">
                  <label for="namaLevel">Nama Level</label>
                  <input type="text" class="form-control @error('namalevel') is-invalid @enderror" value="{{ old('namalevel', $level->nama_level) }}" name="namalevel">
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