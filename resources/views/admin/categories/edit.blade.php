@extends('admin.layouts.app')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Kategori</h1>

    <a href="{{ route('categories.index') }}" class="btn btn-secondary btn-sm shadow-sm">
        Kembali
    </a>
</div>

<div class="card shadow mb-4 col-md-8 px-0">
    <div class="card-header py-3 bg-light">
        <h6 class="m-0 font-weight-bold text-primary">
            Edit Kategori: {{ $category->name }}
        </h6>
    </div>

    <div class="card-body">
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nama Kategori</label>

                <input type="text"
                       class="form-control @error('name') is-invalid @enderror"
                       id="name"
                       name="name"
                       value="{{ old('name', $category->name) }}"
                       required>

                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                Perbarui Kategori
            </button>

            <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                Batal
            </a>
        </form>
    </div>
</div>

@endsection