<!-- resources/views/course_categories/create.blade.php -->

@extends('layouts.backend-template')

@section('content')
    <h1>Add Course Category</h1>
    <form action="{{ route('course_categories.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="text" id="image" name="image">
        </div>
        <button type="submit">Add Category</button>
    </form>
@endsection
