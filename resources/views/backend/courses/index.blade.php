@extends('layouts.frontend-metronic-template')

@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
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
                        <td>{{ $course->short_desc }}</td>
                        <td>
                            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <a href="{{ route('coursesdetail.list', $course->slug) }}" class="btn btn-info btn-sm">List</a>
                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>

                         
                                @if ($course->status == 'inactive')
                                    <form action="{{ route('courses.updateStatus', $course->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-danger btn-sm">Activate</button>
                                    </form>
                                @else
                                <form action="{{ route('courses.updateStatus', $course->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-primary btn-sm">Inactivate</button>
                                </form>
                                @endif
                          
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
