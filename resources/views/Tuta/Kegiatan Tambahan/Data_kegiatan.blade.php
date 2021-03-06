@extends('Layout.app')
@section('title', 'Tugas Tambahan (TUTA Tambahan)')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">

    <div class="card-header">
      @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-check"></i> Alhamdulillah</h5>
          {{ Session::get('success') }}
        </div>
        {{-- <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div> --}}
      @endif
      @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-ban"></i> Astagfirullah</h5>
          {{ Session::get('error') }}
        </div>
        {{-- <div class="alert alert-danger" role="alert">{{ Session::get('error') }}</div> --}}
      @endif
      <h3 class="card-title"><i class="fas fa-clipboard-list"></i> Data Kegiatan Tugas Tambahan (TUTA)</h3>
      <div class="card-tools">
        <a href="{{ route('tutatambahan.create') }}" class="btn btn-primary btn-sm "><i class="fas fa-plus" title="Tambah Data"></i> Tambah Data</a>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>Jam/ Waktu</th>
          <th>Aktifitas</th>
          <th>Isi Kegiatan</th>
          <th>Volume</th>
          <th>Status</th>
          <th>Author</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($tutatambahans as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->tanggal }}</td>
          <td>{{ $item->jam_mulai}} - {{ $item->jam_selesai }}</td>
          <td>{{ $item->aktifitas }}</td>
          <td>{{ Str::limit($item->kegiatan, 30) }}</td>
          <td>{{ $item->volume_laporan }}</td>
          @if( $item->status == NULL)
          <td><span class="badge badge-warning">Proses</span></td>
          @elseif($item->status == "Diterima")
          <td><span class="badge badge-success">Diterima</span></td>
          @else
          <td><span class="badge badge-danger">Ditolak</span></td>
          @endif
          <td>
            {{ $item->author->name }}
          </td>
          <td>
            <a href="{{ route('tutatambahan.show', $item->id) }}" class="btn btn-success btn-sm " title="Detail"><i class="fas fa-eye"></i></a>
            <a href="{{ route('tutatambahan.edit', $item->id) }}" class="btn btn-warning btn-sm "><i class="fas fa-edit"></i></a>
            <a href="#" class="btn btn-danger btn-sm "><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Jam/ Waktu</th>
            <th>Aktifitas</th>
            <th>Isi Kegiatan</th>
            <th>Volume</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>
</div>
</div>
<!-- /.modal -->
@endsection
@section('javascript')
    <!-- page script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection
