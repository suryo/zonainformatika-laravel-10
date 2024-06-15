@extends('layouts.frontend-metronic-template')

@section('content')
    <div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
        <h1>Register User to Course</h1>
        <form action="{{ route('register_course_user.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="register_number">Register Number</label>
                <input type="text" name="register_number" id="register_number" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="course_id">Course</label>
                <select name="course_id" id="course_id" class="form-control" required>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="user_id">User</label>
                <select name="user_id" id="user_id" class="form-control" required>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="note">Note</label>
                <textarea name="note" id="note" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" id="status" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="deleted">Deleted</label>
                <select name="deleted" id="deleted" class="form-control" required>
                    <option value="false">False</option>
                    <option value="true">True</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

    <!-- Existing body content -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#user_id').select2({
                placeholder: "Select a user",
                allowClear: true
            });

            $('#course_id').select2({
                placeholder: "Select a course",
                allowClear: true
            });
        });
    </script>
@endsection
