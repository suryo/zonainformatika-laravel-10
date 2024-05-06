@extends('layouts.backend-template')

@section('content')
    <h1>Edit Course Detail</h1>
    <form action="{{ route('coursedetail.update', $courseDetail->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $courseDetail->title }}">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control ckeditor" id="description" name="description" rows="4">{{ $courseDetail->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="video">Video:</label>
          
            <textarea class="form-control" id="video" name="video" rows="4">{{ $courseDetail->video }}</textarea>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $courseDetail->type }}">
        </div>
        <input type="hidden" name="course_id" id="course_id" value={{ $course_id }}>
        <input type="hidden" name="course_detail_id" id="course_detail_id" value={{ $course_detail_id }}>
        
        <button type="submit" class="btn btn-primary">Update Course Detail</button>
    </form>
@endsection


