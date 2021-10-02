@extends('Layout.app')
@section('title', 'Kegiatan Utama Pendidik')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-text-width"></i>
        Detail Data Kegiatan Utama Pendidik
      </h3>
    </div>
    {{-- <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>Nama PTK</th>
            <th>Tanggal</th>
            <th>Jam/ Waktu</th>
            <th>Aktifitas</th>
            <th>Isi Kegiatan</th>
            <th>Laporan</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Hari Muhlia, S.Kom.</td>
            <td>{{ $kegpendidik->tanggal }}</td>
            <td>{{ $kegpendidik->jam_mulai }} - {{ $kegpendidik->jam_selesai }}</td>
            <td>{{ $kegpendidik->aktifitas }}</td>
            <td>{{ $kegpendidik->kegiatan }}</td>
            <td>{{ $kegpendidik->volume_laporan }}</td>
            <td>{{ $kegpendidik->status }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
    <a href="{{ route('kegiatanpendidik.index') }}" class="btn btn-success btn-sm "><i class="fas fa-undo"></i> Kembali</a>
    <a href="{{ route('kegiatanpendidik.edit', $kegpendidik->id) }}" class="btn btn-warning btn-sm "><i class="fas fa-edit"></i> Edit</a> --}}
    <!-- /.card-header -->
    <div class="card-body">
      <dl class="row">
        <dt class="col-sm-4">Tanggal</dt>
        <dd class="col-sm-8">: {{ $kegpendidik->tanggal }}</dd>
        <dt class="col-sm-4">Jam/ Waktu</dt>
        <dd class="col-sm-8">: {{ $kegpendidik->jam_mulai }} - {{ $kegpendidik->jam_selesai }}</dd>
        <dt class="col-sm-4">Aktifitas</dt>
        <dd class="col-sm-8">: {{ $kegpendidik->aktifitas }}</dd>
        <dt class="col-sm-4">Isi Kegiatan</dt>
        <dd class="col-sm-8 text">: {{ $kegpendidik->kegiatan }}</dd>
        <dt class="col-sm-4">Volume Laporan</dt>
        <dd class="col-sm-8">: {{ $kegpendidik->volume_laporan }}</dd>
        <dt class="col-sm-4">Status Laporan</dt>
        <dd class="col-sm-8">: {{ $kegpendidik->status }}</dd>
        @if($kegpendidik->status === "Ditolak")
        <dt class="col-sm-4">Alasan Ditolak</dt>
        <dd class="col-sm-8">: {{ $kegpendidik->alasan }}</dd>
        @endif
      </dl>
    </div>
    <!-- /.card-body -->
  </div>

  <a href="{{ route('kegiatanpendidik.index') }}" class="btn btn-success btn-sm "><i class="fas fa-undo"></i> Kembali</a>
  <a href="{{ route('kegiatanpendidik.edit', $kegpendidik->id) }}" class="btn btn-warning btn-sm "><i class="fas fa-edit"></i> Edit</a>
@endsection
