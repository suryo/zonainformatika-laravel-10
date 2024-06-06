@extends('layouts.frontend-metronic-template')

@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
    <h1>{{ $course->title }}</h1>
    <p>Description: {{ $course->description }}</p>
    <a href="{{ route('courses.index') }}">Back to All Courses</a>
</div>
@endsection
