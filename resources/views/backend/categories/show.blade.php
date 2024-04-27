<!-- resources/views/course_categories/show.blade.php -->

@extends('layouts.backend-template')

@section('content')
    <h1>{{ $category->name }}</h1>
    <p>Image: {{ $category->image }}</p>
    <a href="{{ route('course_categories.index') }}">Back to All Course Categories</a>
@endsection
