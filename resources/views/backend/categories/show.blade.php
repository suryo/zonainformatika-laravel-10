@extends('layouts.frontend-metronic-template')

@section('content')
    <h1>{{ $category->name }}</h1>
    <p>Image: {{ $category->image }}</p>
    <a href="{{ route('course_categories.index') }}">Back to All Course Categories</a>
@endsection
