@extends('layouts.frontend-metronic-template')

@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
    <h1>Category Details</h1>
    <p><strong>ID:</strong> {{ $articleCategory->id }}</p>
    <p><strong>Category:</strong> {{ $articleCategory->category }}</p>
    <p><strong>Slug:</strong> {{ $articleCategory->slug }}</p>
    <p><strong>Status:</strong> {{ $articleCategory->status }}</p>
    <a href="{{ route('articlecategory.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
