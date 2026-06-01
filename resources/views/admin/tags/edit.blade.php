@extends('admin.layouts.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">
    Edit Tag
</h1>

<div class="card shadow">
    <div class="card-body">

        <form action="{{ route('tags.update', $tag->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nama Tag</label>

                <input type="text"
                       name="name"
                       value="{{ $tag->name }}"
                       class="form-control"
                       required>
            </div>

            <button class="btn btn-primary">
                Update
            </button>

            <a href="{{ route('tags.index') }}"
               class="btn btn-secondary">
               Kembali
            </a>

        </form>

    </div>
</div>

@endsection