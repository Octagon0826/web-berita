@extends('admin.layouts.app')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Edit Pengguna</h1>

<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
            </div>

            <hr>

            <p class="text-muted">Kosongkan password jika tidak ingin mengubah password.</p>

            <div class="form-group">
                <label>Password Baru</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
                <label>Konfirmasi Password Baru</label>
                <input type="password" name="password_confirmation" class="form-control">
            </div>

            <button class="btn btn-primary">Update</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection