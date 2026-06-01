@extends('admin.layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manajemen Pengguna</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm">
        Tambah Pengguna
    </a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif

<div class="card shadow mb-4">
    <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Pengguna</h6>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tanggal Daftar</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        {{ $user->name }}

                        @if($user->id === auth()->id())
                            <span class="badge badge-success">Aktif</span>
                        @endif
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d M Y H:i') }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin hapus pengguna ini?')"
                                {{ $user->id === auth()->id() ? 'disabled' : '' }}>
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada pengguna</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection