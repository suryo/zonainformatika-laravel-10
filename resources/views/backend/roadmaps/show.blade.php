<!-- resources/views/course_roadmaps/show.blade.php -->
@extends('layouts.frontend-metronic-template')

@section('content')
    <h1>{{ $roadmap->title }}</h1>
    <!-- Show other details as needed -->
    <a href="{{ route('course_roadmaps.index') }}">Back to All Course Roadmaps</a>
@endsection
