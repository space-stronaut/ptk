@extends('Layout.app')
@section('title', 'Edit Data Kegiatan Utama')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title"><i class="fas fa-plus" title="Tambah Data"></i> Form Edit Data Kegiatan Utama Pendidik</h3>
    <div class="card-tools">
      <button
        type="button"
        class="btn btn-tool"
        data-card-widget="collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button
        type="button" class="btn btn-tool"
        data-card-widget="remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="row">
      <div class="col-md-6">
        <form action="{{ route('kegiatanpendidik.update', $kegpendidik->id) }}" method="POST">
         @csrf
         @method('PUT')
        <div class="form-group">
          <label for="tanggalKegiatan">Tanggal Kegiatan</label>
          <input type="Date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" placeholder="Masukan tanggal" value="{{ old('tanggal', $kegpendidik->tanggal) }}">
          @error('tanggal')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="jamMulai">Jam Mulai Kegaiatan</label>
          <input type="time" name="jam_mulai" class="form-control @error('jam_mulai') is-invalid @enderror" placeholder="Masukan Jam Mulai" value="{{ old('jam_mulai', $kegpendidik->jam_mulai) }}">
          @error('jam_mulai')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <input type="hidden" name="keterangan" value="tambahan">
          <label for="jamSelesai">Jam Selesai Kegiatan</label>
          <input type="time" name="jam_selesai" class="form-control @error('jam_selesai') is-invalid @enderror" placeholder="Masukan Jam Selesai" value="{{ old('jam_selesai', $kegpendidik->jam_selesai) }}">
          @error('jam_selesai')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label>Aktifitas</label>
          <select class="form-control select2" name="aktifitas" style="width: 100%">
            <option selected="selected">{{ old('nomorhp', $kegpendidik->aktifitas) }}</option>
            <option>WFO</option>
            <option>WFH</option>
          </select>
        </div>
      </div>

{{-- Posisi Sebelah Kanan --}}
      <!-- /.col -->
      <div class="col-md-6">
        <div class="form-group">
          <label>Volume</label>
          <select class="form-control select2" name="volume_laporan" style="width: 100%">
            <option selected="selected">{{ old('nomorhp', $kegpendidik->volume_laporan) }}</option>
            <option>1 Laporan</option>
            <option>2 Laporan</option>
            <option>3 Laporan</option>
            <option>4 Laporan</option>
            <option>5 Laporan</option>
          </select>
        </div>
        <div class="form-group">
          <label>Input Kegiatan</label>
          <textarea class="form-control" name="kegiatan" class="form-control @error('kegiatan') is-invalid @enderror" rows="8" placeholder="Silakan Isi Kegiatan Disini..">{{ old('kegiatan', $kegpendidik->kegiatan) }}</textarea>
          @error('kegiatan')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
        </div>
        <!-- /.form-group -->
        <div class="card-footer">
          <a href="{{ route('kegiatanpendidik.index') }}" class="btn btn-success btn-sm "><i class="fas fa-undo"></i> Kembali</a>
          <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /.card-body -->
<!-- /.card -->
@endsection
