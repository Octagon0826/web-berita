@extends('admin.layouts.app')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Tambah Pengguna</h1>

<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <button class="btn btn-primary">Simpan</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection