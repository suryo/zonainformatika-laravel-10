<!-- resources/views/course_technologies/show.blade.php -->

@extends('layouts.backend-template')

@section('content')
    <h1>{{ $technology->name }}</h1>
    <p>Image: {{ $technology->image }}</p>
    <a href="{{ route('course_technologies.index') }}">Back to All Course Technologies</a>
@endsection
