<!-- resources/views/course_roadmaps/index.blade.php -->

@extends('layouts.backend-template')

@section('content')
    <h1>All Course Roadmaps</h1>
    <a href="{{ route('course_roadmaps.create') }}">Add Course Roadmap</a>
    <table>
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
                        <a href="{{ route('course_roadmaps.edit', $roadmap->id) }}">Edit</a>
                        <form action="{{ route('course_roadmaps.destroy', $roadmap->id) }}" method="POST">
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
