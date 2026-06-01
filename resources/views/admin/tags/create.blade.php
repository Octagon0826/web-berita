@extends('admin.layouts.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">
    Tambah Tag
</h1>

<div class="card shadow">
    <div class="card-body">

        <form action="{{ route('tags.store') }}" method="POST">

            @csrf

            <div class="form-group">
                <label>Nama Tag</label>

                <input type="text"
                       name="name"
                       class="form-control"
                       required>
            </div>

            <button class="btn btn-primary">
                Simpan
            </button>

            <a href="{{ route('tags.index') }}"
               class="btn btn-secondary">
               Kembali
            </a>

        </form>

    </div>
</div>

@endsection