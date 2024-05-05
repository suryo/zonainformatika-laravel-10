@extends('layouts.backend-template')

@section('content')
    <h1>Edit Course Detail</h1>
    <form action="{{ route('course_details.update', $courseDetail->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $courseDetail->title }}">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4">{{ $courseDetail->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $courseDetail->type }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Course Detail</button>
    </form>
@endsection
