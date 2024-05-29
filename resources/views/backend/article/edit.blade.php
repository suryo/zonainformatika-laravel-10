@extends('layouts.backend-template')

@section('content')
<div class="container mt-4">
    <h1>Edit Article</h1>
    <form action="{{ route('article.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" required>
        </div>
        <div class="mb-3">
            <label for="short_desc" class="form-label">Short Description</label>
            <textarea class="form-control" id="short_desc" name="short_desc">{{ $article->short_desc }}</textarea>
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Text</label>
            <textarea class="form-control" id="text" name="text" required>{{ $article->text }}</textarea>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $article->author }}" required>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $article->slug }}" required>
        </div>
        <div class="mb-3">
            <label for="article_category_id" class="form-label">Category</label>
            <select class="form-select" id="article_category_id" name="article_category_id" required>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $article->article_category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->category }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="{{ $article->status }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Article</button>
    </form>
</div>
@endsection
