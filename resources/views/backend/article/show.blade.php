@extends('layouts.backend-template')

@section('content')
<div class="container mt-4">
    <h1>Article Details</h1>
    <p><strong>ID:</strong> {{ $article->id }}</p>
    <p><strong>Title:</strong> {{ $article->title }}</p>
    <p><strong>Short Description:</strong> {{ $article->short_desc }}</p>
    <p><strong>Text:</strong> {{ $article->text }}</p>
    <p><strong>Author:</strong> {{ $article->author }}</p>
    <p><strong>Slug:</strong> {{ $article->slug }}</p>
    <p><strong>Category:</strong> {{ $article->category->category }}</p> <!-- Assumes Article model has a 'category' relationship -->
    <p><strong>Status:</strong> {{ $article->status }}</p>
    <a href="{{ route('article.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
