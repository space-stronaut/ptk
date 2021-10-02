@extends('Layout.app')
@section('title', 'Semua Data Kegiatan')

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
      <h3 class="card-title"><i class="fas fa-clipboard-list"></i> Seluruh Data Kegiatan Menunggu Approve</h3>
      {{-- <div class="card-tools">
        <a href="{{ route('kegiatanpendidik.create') }}" class="btn btn-primary btn-sm "><i class="fas fa-plus" title="Tambah Data"></i> Tambah Data</a>
      </div> --}}
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
          <th>Author</th>
          <th>Keterangan</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($approvependidiks as $item)
        @if ($item->status === NULL)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->tanggal }}</td>
            <td>{{ $item->jam_mulai}} - {{ $item->jam_selesai }}</td>
            <td>{{ $item->aktifitas }}</td>
            <td>{{ Str::limit($item->kegiatan, 30) }}</td>
            <td>{{ $item->volume_laporan }}</td>
            <td>
              {{$item->author->name}}
            </td>
            <td>{{ $item->keterangan }}</td>
            @if( $item->status == NULL)
            <td><span class="badge badge-warning">Proses</span></td>
            @elseif($item->status == "Diterima")
            <td><span class="badge badge-success">Diterima</span></td>
            @endif
            <td class="d-flex">
              <form action="/approve/kegpendidik/update/{{$item->id}}" method="post">
                  @csrf
                  @method('put')
                  <input type="hidden" name="status" value="Diterima">
                  <button type="submit" class="btn btn-success">Terima</button>
              </form>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-danger ml-3" data-toggle="modal" data-target="#exampleModal">
                Tolak
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Alasan Penolakan</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="/approve/kegpendidik/update/{{$item->id}}" method="post">
                          @csrf
                          @method('put')
                          <input type="hidden" name="status" value="Ditolak">
                          <textarea name="alasan" class="form-control"></textarea>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-danger">Tolak</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        @endif
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
          <th>Keterangan</th>
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
