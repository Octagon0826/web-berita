@extends('admin.layouts.app')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Tulis Berita</h1>

<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Judul Berita</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select name="category_id" class="form-control" required>
                    <option value="">-- Pilih Kategori --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
	
<div class="form-group">
    <label>Gambar Berita</label>
    <input type="file" name="image" class="form-control" required>
</div>

            <div class="form-group">
                <label>Isi Berita</label>
                <textarea name="content" rows="8" class="form-control" required></textarea>
            </div>

	<div class="form-group">
    <label>Tag Berita</label>

    @foreach($tags as $tag)
        <div class="form-check">
            <input
                class="form-check-input"
                type="checkbox"
                name="tags[]"
                value="{{ $tag->id }}">

            <label class="form-check-label">
                {{ $tag->name }}
            </label>
        </div>
    @endforeach
</div>

            <button class="btn btn-primary">Simpan</button>
            <a href="{{ route('articles.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection