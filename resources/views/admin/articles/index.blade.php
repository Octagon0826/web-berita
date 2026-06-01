@extends('admin.layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kelola Berita</h1>
    <a href="{{ route('articles.create') }}" class="btn btn-primary btn-sm">
        Tulis Berita
    </a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card shadow mb-4">
    <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Artikel Berita</h6>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <thead class="bg-primary text-white">
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Kategori & Tag</th>
                    <th>Penulis</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($articles as $article)
                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td>
                        @if($article->image)
                            <img src="{{ asset('storage/' . $article->image) }}"
                                 width="100"
                                 class="img-thumbnail">
                        @else
                            Tidak ada gambar
                        @endif
                    </td>

                    <td>
                        <b>{{ $article->title }}</b><br>
                        <small>{{ $article->slug }}</small><br>
                        <a href="/berita/{{ $article->slug }}" target="_blank">
                            Lihat Detail
                        </a>
                    </td>

                    <td>
                        <span class="badge badge-info">
                            {{ $article->category->name }}
                        </span>

                        <br><br>

                        @forelse($article->tags as $tag)
                            <span class="badge badge-secondary">
                                #{{ $tag->name }}
                            </span>
                        @empty
                            <small>Belum ada tag</small>
                        @endforelse
                    </td>

                    <td>
                        {{ $article->user->name }}
                    </td>

                    <td>
                        <a href="{{ route('articles.edit', $article->id) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('articles.destroy', $article->id) }}"
                              method="POST"
                              class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin hapus berita?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada berita</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection