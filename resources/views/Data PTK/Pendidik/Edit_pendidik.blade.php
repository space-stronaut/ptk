@extends('Layout.app')
@section('title', 'Edit Data Pendidik')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title"><i class="fas fa-plus" title="Tambah Data"></i> Form Edit Data Pendidik</h3>

    <div class="card-tools">
      <button
        type="button"
        class="btn btn-tool"
        data-card-widget="collapse"
      >
        <i class="fas fa-minus"></i>
      </button>
      <button
        type="button"
        class="btn btn-tool"
        data-card-widget="remove"
      >
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="row">
      <div class="col-md-6">
        <form method="POST" action="{{ route('datapendidik.update', $pendidik->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="nuptknip">NUPTK/ NIP</label>
          <input type="text" name="nuptk" class="form-control @error('nuptk') is-invalid @enderror" placeholder="Masukan NUPTK/ NIP" value="{{ old('nuptk', $pendidik->nuptk_nip) }}">
          @error('nuptk')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="namaLengkap">Nama Lengkap</label>
          <input type="text" name="namalengkap" class="form-control @error('namalengkap') is-invalid @enderror" placeholder="Masukan Nama Lengkap" value="{{ old('namalengkap', $pendidik->nama_lengkap) }}">
          @error('namalengkap')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="tempatLahir">Tempat Lahir</label>
          <input type="text" name="tempatlahir" class="form-control @error('tempatlahir') is-invalid @enderror" placeholder="Masukan Tempat Lahir" value="{{ old('tempatlahir', $pendidik->tempat_lahir) }}">
          @error('tempatlahir')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="tanggalLahir">Tanggal Lahir</label>
          <input type="date" name="tanggallahir" class="form-control datetimepicker-input @error('tanggallahir') is-invalid @enderror" value="{{ old('namajurusan', $pendidik->tanggal_lahir) }}">
          @error('tanggallahir')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label>Jenis Kelamin</label>
          <select class="form-control select2" name="jeniskelamin" style="width: 100%">
            <option selected="selected">{{ old('nomorhp', $pendidik->jenis_kelamin) }}</option>
            <option>Laki-Laki</option>
            <option>Perempuan</option>
          </select>
        </div>
      </div>

{{-- Posisi Sebelah Kiri --}}
      <!-- /.col -->
      <div class="col-md-6">
        <div class="form-group">
          <label for="nomorHp">Nomor HP</label>
          <input type="text" name="nomorhp" class="form-control @error('nomorhp') is-invalid @enderror" placeholder="Masukan Nomor HP" value="{{ old('nomorhp', $pendidik->nomor_hp) }}">
          @error('nomorhp')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukan Email" value="{{ old('email', $pendidik->email) }}">
          @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label>Jabatan/ Penugasan</label>
          <select class="form-control select2" name="jabatan" style="width: 100%">
            <option selected="selected">{{ old('alamatlengkap', $pendidik->penugasan_jbtn) }}</option>
            <option>Pendidik</option>
            <option>Tendik</option>
          </select>
        <div class="form-group">
          <label for="alamatLengkap">Alamat Lengkap</label>
          <textarea name="alamatlengkap" class="form-control @error('alamatlengkap') is-invalid @enderror" rows="2" placeholder="Masukan Alamat Lengkap" value="">{{ old('alamatlengkap', $pendidik->alamat) }}</textarea>
          @error('alamatlengkap')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="customFile">Upload Foto</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>
        </div>
        <!-- /.form-group -->
      </div>
    </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <a href="{{ route('datapendidik.index') }}" class="btn btn-success btn-sm "><i class="fas fa-undo"></i> Kembali</a>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
</div>
<!-- /.card -->
@endsection