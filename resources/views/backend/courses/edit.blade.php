<!-- resources/views/courses/edit.blade.php -->
@extends('layouts.frontend-metronic-template')

@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
    <h1>Edit Course</h1>
    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input class="form-control" type="text" id="title" name="title" value="{{ $course->title }}">
        </div>
        <div class="form-group">
            <label for="short_desc">Short Description:</label>
            <textarea class="form-control" id="short_desc" name="short_desc">{{ $course->short_desc }}</textarea>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="text" name="text">{{ $course->text }}</textarea>
        </div>
       
        <div class="form-group">
            <label for="type">Type:</label>
            <input class="form-control" type="text" id="type" name="type" value="{{ $course->type }}">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input class="form-control" type="text" id="price" name="price" value="{{ $course->price }}">
        </div>
        <div class="form-group">
            <label for="author">Author:</label>
            <input class="form-control" type="text" id="author" name="author" value="{{ $course->author }}">
        </div>
        <div class="form-group">
            <label for="slug">Slug:</label>
            <input class="form-control" type="text" id="slug" name="slug" value="{{ $course->slug }}">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status">
                <option value="active" {{ $course->status == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $course->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <div class="form-group">
            <label for="deleted">Deleted:</label>
            <select class="form-control" id="deleted" name="deleted">
                <option value="false" {{ $course->deleted == "false" ? 'selected' : '' }}>False</option>
                <option value="true" {{ $course->deleted == "true" ? 'selected' : '' }}>True</option>
               
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
