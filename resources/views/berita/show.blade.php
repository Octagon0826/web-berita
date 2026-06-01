<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $article->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">Octagon News</a>

        <div>
            <a href="/" class="btn btn-light btn-sm">Home</a>

            @auth
                <a href="/admin/dashboard" class="btn btn-warning btn-sm">Dashboard</a>
            @else
                <a href="/login" class="btn btn-outline-light btn-sm">Login</a>
            @endauth
        </div>
    </div>
</nav>

<div class="container py-5">

    <div class="card shadow border-0">
        @if($article->image)
            <img src="{{ asset('storage/' . $article->image) }}"
                 class="card-img-top"
                 style="max-height: 450px; object-fit: cover;">
        @endif

        <div class="card-body p-5">
            <span class="badge bg-primary">{{ $article->category->name }}</span>

            @foreach($article->tags as $tag)
                <span class="badge bg-secondary">#{{ $tag->name }}</span>
            @endforeach

            <h1 class="fw-bold mt-3">{{ $article->title }}</h1>

            <p class="text-muted">
                Ditulis oleh <b>{{ $article->user->name }}</b>
                pada {{ $article->created_at->format('d M Y H:i') }}
            </p>

            <hr>

            <p class="fs-5" style="white-space: pre-line; line-height: 1.8;">
                {{ $article->content }}
            </p>
        </div>
    </div>

    <div class="card shadow border-0 mt-4">
        <div class="card-body">
            <h4 class="fw-bold">Profil Penulis</h4>

            <div class="row">
                <div class="col-md-4">
                    <p><b>Nama:</b> {{ $article->user->name }}</p>
                </div>

                <div class="col-md-4">
                    <p><b>Telepon:</b> {{ $article->user->profile->phone ?? 'Belum diisi' }}</p>
                </div>

                <div class="col-md-4">
                    <p><b>Email:</b> {{ $article->user->email }}</p>
                </div>
            </div>

            <p><b>Bio:</b> {{ $article->user->profile->bio ?? 'Belum diisi' }}</p>
        </div>
    </div>

</div>

<footer class="bg-primary text-white text-center py-3">
    <small>Copyright &copy; Octagon News {{ date('Y') }}</small>
</footer>

</body>
</html>