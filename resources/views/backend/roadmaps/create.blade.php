<!-- resources/views/course_roadmaps/create.blade.php -->

@extends('layouts.backend-template')

@section('content')
    <h1>Add Course Roadmap</h1>
    <form action="{{ route('course_roadmaps.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
        </div>
        <!-- Add other fields as needed -->
        <button type="submit">Add Roadmap</button>
    </form>
@endsection
