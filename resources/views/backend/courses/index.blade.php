@extends('layouts.backend-template')

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-4">All Courses</h1>
        <a href="{{ route('courses.create') }}" class="btn btn-info mb-4">+ Course</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->description }}</td>
                        <td>
                            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <a href="{{ route('coursesdetail.list', $course->slug) }}" class="btn btn-info btn-sm">List</a>
                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
