@extends('layouts.frontend-metronic-template')

@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
    <h1>Registrations </h1>
    <a href="{{ route('register_course_user.create') }}" class="btn btn-primary">Register User to Course</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Register Number</th>
                <th>Course</th>
                <th>User</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registrations as $registration)
                <tr>
                    <td>{{ $registration->id }}</td>
                    <td>{{ $registration->register_number }}</td>
                    <td>{{ $registration->course->title }}</td>
                    <td>{{ $registration->user->name }}</td>
                    <td>{{ $registration->status }}</td>
                    <td>
                        <a href="{{ route('register_course_user.edit', $registration->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('register_course_user.destroy', $registration->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
