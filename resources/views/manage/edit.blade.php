@extends('Layout.app')
@section('title', 'Edit User')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title"><i class="fas fa-plus" title="Tambah Data"></i> Form Edit Data User</h3>
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
        <form action="/users/update/{{ $user->id }}" method="POST">
          @csrf
          @method('put')
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" id="">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" value="{{ $user->password }}" class="form-control" id="">
        </div>
        <div class="form-group">
            <select name="role" id="" class="form-control">
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="kepala sekolah" {{ $user->role == 'kepala sekolah' ? 'selected' : '' }}>Kepala Sekolah</option>
                <option value="pendidik" {{ $user->role == 'pendidik' ? 'selected' : '' }}>Pendidik</option>
                <option value="tendik" {{ $user->role == 'tendik' ? 'selected' : '' }}>Tendik</option>
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
