<!-- resources/views/course_categories/edit.blade.php -->

@extends('layouts.backend-template')

@section('content')
    <h1>Edit Course Category</h1>
    <form action="{{ route('course_categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $category->name }}">
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="text" id="image" name="image" value="{{ $category->image }}">
        </div>
        <button type="submit">Update Category</button>
    </form>
@endsection
