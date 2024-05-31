@extends('layouts.frontend-metronic-template')

@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
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
