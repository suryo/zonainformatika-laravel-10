<!-- resources/views/course_categories/index.blade.php -->

@extends('layouts.backend-template')

@section('content')
    <h1>All Course Categories</h1>
    <a href="{{ route('course_categories.create') }}">Add Course Category</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->image }}</td>
                    <td>
                        <a href="{{ route('course_categories.edit', $category->id) }}">Edit</a>
                        <form action="{{ route('course_categories.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
