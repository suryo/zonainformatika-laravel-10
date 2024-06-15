@extends('layouts.frontend-metronic-template')

@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
    <h1>Edit Registration</h1>
    <form action="{{ route('register_course_user.update', $registerCourseUser->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="register_number">Register Number</label>
            <input type="text" name="register_number" id="register_number" class="form-control" value="{{ $registerCourseUser->register_number }}" required>
        </div>
        <div class="form-group">
            <label for="course_id">Course</label>
            <select name="course_id" id="course_id" class="form-control" required>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}" {{ $registerCourseUser->course_id == $course->id ? 'selected' : '' }}>{{ $course->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="user_id">User</label>
            <select name="user_id" id="user_id" class="form-control" required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $registerCourseUser->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="note">Note</label>
            <textarea name="note" id="note" class="form-control">{{ $registerCourseUser->note }}</textarea>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" name="status" id="status" class="form-control" value="{{ $registerCourseUser->status }}" required>
        </div>
        <div class="form-group">
            <label for="deleted">Deleted</label>
            <select name="deleted" id="deleted" class="form-control" required>
                <option value="false" {{ $registerCourseUser->deleted == 'false' ? 'selected' : '' }}>False</option>
                <option value="true" {{ $registerCourseUser->deleted == 'true' ? 'selected' : '' }}>True</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
