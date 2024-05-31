@extends('layouts.frontend-metronic-template')

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-4">All Course Technologies</h1>
        <a href="{{ route('course_technologies.create') }}" class="btn btn-primary mb-4">Add Course Technology</a>
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
                            <a href="{{ route('course_technologies.edit', $technology->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('course_technologies.destroy', $technology->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this roadmap?')">Delete</button>
                            </form>

                           
                        </td>

                       
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
