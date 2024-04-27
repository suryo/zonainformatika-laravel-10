<!-- resources/views/courses/show.blade.php -->

@extends('layouts.backend-template')

@section('content')
    <h1>{{ $course->title }}</h1>
    <p>Description: {{ $course->description }}</p>
    <a href="{{ route('courses.index') }}">Back to All Courses</a>
@endsection
