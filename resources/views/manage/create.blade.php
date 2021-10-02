@extends('Layout.app')
@section('title', 'Add User')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title"><i class="fas fa-plus" title="Tambah Data"></i> Form Tambah Data User</h3>
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
        <form action="/users/store" method="POST">
          @csrf
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="name" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" id="">
        </div>
        <div class="form-group">
            <select name="role" id="" class="form-control">
                <option value="admin">Admin</option>
                <option value="kepala sekolah">Kepala Sekolah</option>
                <option value="pendidik">Pendidik</option>
                <option value="tendik">Tendik</option>
            </select>
        </div>
        <!-- /.form-group -->
        <div class="card-footer">
          <a href="/users" class="btn btn-success btn-sm "><i class="fas fa-undo"></i> Kembali</a>
          <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /.card-body -->
<!-- /.card -->
@endsection
