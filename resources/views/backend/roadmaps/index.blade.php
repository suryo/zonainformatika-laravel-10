@extends('layouts.backend-template')

@section('content')
    <div class="container">
        <h1 class="my-4">All Course Roadmaps</h1>
        <a href="{{ route('course_roadmaps.create') }}" class="btn btn-primary mb-3">Add Course Roadmap</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roadmaps as $roadmap)
                    <tr>
                        <td>{{ $roadmap->title }}</td>
                        <td>
                            <a href="{{ route('roadmaps.edit', $roadmap->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('course_roadmaps.destroy', $roadmap->id) }}" method="POST" class="d-inline">
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
