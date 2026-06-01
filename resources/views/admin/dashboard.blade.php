@extends('admin.layouts.app')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard Admin</h1>
</div>

<div class="row">

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <h5>Total User</h5>
                <h3>{{ $totalUsers }}</h3>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <h5>Total Kategori</h5>
                <h3>{{ $totalCategories }}</h3>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <h5>Total Berita</h5>
                <h3>{{ $totalArticles }}</h3>
            </div>
        </div>
    </div>

<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <h5>Total Tag</h5>
            <h3>{{ $totalTags }}</h3>
        </div>
    </div>
</div>

</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Sistem Web Berita Laravel
        </h6>
    </div>

    <div class="card-body">

        <p>
            Selamat datang di Dashboard Admin Web Berita.
        </p>

        <hr>

        <h5>Fitur Yang Tersedia</h5>

        <ul>
            <li>Autentikasi Login & Register Laravel</li>
            <li>Dashboard Admin SB Admin 2</li>
            <li>Manajemen Pengguna</li>
            <li>Manajemen Kategori Berita</li>
            <li>Manajemen Tag Berita</li>
            <li>CRUD Artikel Berita</li>
            <li>Upload Gambar Berita</li>
            <li>Profil Penulis</li>
            <li>Detail Berita Publik</li>
        </ul>

        <hr>

        <p>
            Project ini merupakan hasil pengembangan Praktikum Laravel yang menggabungkan materi Routing, Controller, Authentication, Relasi Database, Upload File, dan Dashboard Admin.
        </p>

    </div>
</div>

@endsection