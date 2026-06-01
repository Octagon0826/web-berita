@extends('admin.layouts.app')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Edit Berita</h1>

<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Judul Berita</label>
                <input type="text" name="title" class="form-control" value="{{ $article->title }}" required>
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select name="category_id" class="form-control" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $article->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

<div class="form-group">
    <label>Gambar Berita Baru</label>

    <input type="file"
           name="image"
           class="form-control">
</div>

            <div class="form-group">
                <label>Isi Berita</label>
                <textarea name="content" rows="8" class="form-control" required>{{ $article->content }}</textarea>
            </div>

<div class="form-group">
    <label>Tag Berita</label>

    @foreach($tags as $tag)

        <div class="form-check">

            <input
                class="form-check-input"
                type="checkbox"
                name="tags[]"
                value="{{ $tag->id }}"
                {{ $article->tags->contains($tag->id) ? 'checked' : '' }}>

            <label class="form-check-label">
                {{ $tag->name }}
            </label>

        </div>

    @endforeach

</div>

            <button class="btn btn-primary">Update</button>
            <a href="{{ route('articles.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection