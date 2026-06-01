@extends('admin.layouts.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">
    Profil Penulis
</h1>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="card shadow">
    <div class="card-body">

        <form action="{{ route('profile.update') }}" method="POST">

            @csrf

            <div class="form-group">
                <label>Nama</label>

                <input type="text"
                       name="name"
                       value="{{ $user->name }}"
                       class="form-control"
                       required>
            </div>

            <div class="form-group">
                <label>Nomor Telepon</label>

                <input type="text"
                       name="phone"
                       value="{{ $user->profile->phone ?? '' }}"
                       class="form-control">
            </div>

            <div class="form-group">
                <label>Bio</label>

                <textarea name="bio"
                          rows="5"
                          class="form-control">{{ $user->profile->bio ?? '' }}</textarea>
            </div>

            <button class="btn btn-primary">
                Simpan Profil
            </button>

        </form>

    </div>
</div>

@endsection