@extends('layouts.app')

@section('content')
@php
    $articles = $articles ?? collect();
@endphp
<div class="p-5 mb-5 bg-primary text-white rounded shadow">
    <h1 class="fw-bold">Octagon News</h1>
    <p class="lead">Portal berita modern berbasis Laravel dan Bootstrap 5.</p>

    @auth
        <a href="/admin/dashboard" class="btn btn-light">Masuk Dashboard</a>
    @else
        <a href="/login" class="btn btn-light">Login Admin</a>
        <a href="/register" class="btn btn-outline-light">Register</a>
    @endauth
</div>

<div class="row mb-4">
    <div class="col-md-4">
        <div class="card shadow text-center">
            <div class="card-body">
                <h3>{{ $articles->count() ?? 0 }}</h3>
                <p>Total Berita</p>
            </div>
        </div>
    </div>
</div>

<h2 class="fw-bold mb-4">Berita Terbaru</h2>

<div class="row">
    @forelse($articles as $article)
        <div class="col-md-4 mb-4">
            <div class="card shadow h-100 border-0">
                @if($article->image)
                    <img src="{{ asset('storage/' . $article->image) }}"
                         class="card-img-top"
                         style="height:200px; object-fit:cover;">
                @endif

                <div class="card-body">
                    <span class="badge bg-primary">{{ $article->category->name ?? 'Tanpa Kategori' }}</span>

                    <h5 class="mt-3 fw-bold">{{ $article->title }}</h5>

                    <p class="text-muted small">
                        {{ $article->created_at->format('d M Y') }} |
                        {{ $article->user->name ?? 'Admin' }}
                    </p>

                    @foreach($article->tags as $tag)
                        <span class="badge bg-secondary">#{{ $tag->name }}</span>
                    @endforeach

                    <div class="mt-3">
                        <a href="/berita/{{ $article->slug }}" class="btn btn-primary btn-sm">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="alert alert-info">Belum ada berita.</div>
    @endforelse
</div>
@endsection