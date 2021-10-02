@extends('Layout.app')
@section('title', 'Dashboard Utama')

@section('content')
    <div class="container mx-auto mt-3">
        <div class="card p-4" style="width: 30rem">
            <form action="/login" method="post">
                <div class="mb-3">
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection