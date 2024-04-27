<!-- resources/views/course_technologies/index.blade.php -->

@extends('layouts.backend-template')


@section('content')
    <h1>All Course Technologies</h1>
    <a href="{{ route('course_technologies.create') }}">Add Course Technology</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($technologies as $technology)
                <tr>
                    <td>{{ $technology->name }}</td>
                    <td>{{ $technology->slug }}</td>
                    <td>
                        <a href="{{ route('course_technologies.edit', $technology->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('course_technologies.destroy', $technology->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
