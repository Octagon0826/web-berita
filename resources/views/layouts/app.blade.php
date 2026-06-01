<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') Web Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">Web Berita</a>

        <div>
            <a class="btn btn-outline-light btn-sm" href="/">Home</a>
            <a class="btn btn-outline-light btn-sm" href="/profil">Profil</a>
            <a class="btn btn-outline-light btn-sm" href="/produk">Produk</a>
            <a class="btn btn-outline-light btn-sm" href="/kontak">Kontak</a>
		
		@guest
    <a class="btn btn-warning btn-sm" href="{{ route('login') }}">Login</a>
    <a class="btn btn-success btn-sm" href="{{ route('register') }}">Register</a>
@endguest

@auth
    <a class="btn btn-info btn-sm" href="/admin/dashboard">Dashboard Admin</a>
@endauth

        </div>
    </div>
</nav>

<div class="container mt-5">
    @yield('content')
</div>

<footer class="text-center text-muted mt-5 mb-3">
    Praktikum 10 Laravel Routing Controller
</footer>

</body>
</html>