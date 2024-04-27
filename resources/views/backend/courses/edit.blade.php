<!-- resources/views/courses/edit.blade.php -->

@extends('layouts.backend-template')

@section('content')
    <h1>Edit Course</h1>
    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $course->title }}">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{ $course->description }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
