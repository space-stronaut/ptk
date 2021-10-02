@extends('Layout.app')
@section('title', 'Manage user')

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
      <h3 class="card-title"><i class="fas fa-clipboard-list"></i> Data User</h3>
      <div class="card-tools">
        <a href="/users/create" class="btn btn-primary btn-sm "><i class="fas fa-plus" title="Tambah Data"></i> Tambah Data</a>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form id="form_id" action="/cari" method="get">
        <input type="date" name="cari" class="form-control">
        <button type="submit" class="btn btn-outline-success">Cari</button>
      </form>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Role</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->role}}</td>
          <td>{{ $item->email }}</td>
          <td>
              <a href="/users/edit/{{$item->id}}" class="btn btn-success">Edit</a>
              <a href="/users/delete/{{ $item->id }}" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Role</th>
            <th>Email</th>
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
