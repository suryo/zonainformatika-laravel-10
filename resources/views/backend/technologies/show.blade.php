@extends('layouts.frontend-metronic-template')

@section('content')
    <div class="container">
        <h1>{{ $technology->name }}</h1>
        <p>Image: {{ $technology->image }}</p>
        <a href="{{ route('course_technologies.index') }}" class="btn btn-secondary">Back to All Course Technologies</a>
    </div>
@endsection
