<!-- resources/views/course_roadmaps/edit.blade.php -->

@extends('layouts.backend-template')

@section('content')
    <h1>Edit Course Roadmap</h1>
    <form action="{{ route('course_roadmaps.update', $roadmap->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $roadmap->title }}">
        </div>
        <!-- Add other fields as needed -->
        <button type="submit">Update Roadmap</button>
    </form>
@endsection
