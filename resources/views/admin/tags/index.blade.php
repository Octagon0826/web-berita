@extends('admin.layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kelola Tag</h1>

    <a href="{{ route('tags.create') }}" class="btn btn-primary btn-sm">
        Tambah Tag
    </a>
</div>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="card shadow mb-4">
    <div class="card-body">

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Tag</th>
                    <th>Slug</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($tags as $tag)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $tag->name }}</td>
                    <td>{{ $tag->slug }}</td>

                    <td>
                        <a href="{{ route('tags.edit', $tag->id) }}"
                           class="btn btn-warning btn-sm">
                           Edit
                        </a>

                        <form action="{{ route('tags.destroy', $tag->id) }}"
                              method="POST"
                              class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin hapus tag?')">
                                Hapus
                            </button>

                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">
                        Belum ada tag
                    </td>
                </tr>
                @endforelse
            </tbody>

        </table>

    </div>
</div>
@endsection