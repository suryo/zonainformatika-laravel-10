@extends('layouts.backend-template')

@section('content')
<div class="container mt-4">
    <h1>Category Details</h1>
    <p><strong>ID:</strong> {{ $articleCategory->id }}</p>
    <p><strong>Category:</strong> {{ $articleCategory->category }}</p>
    <p><strong>Slug:</strong> {{ $articleCategory->slug }}</p>
    <p><strong>Status:</strong> {{ $articleCategory->status }}</p>
    <a href="{{ route('articlecategory.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
