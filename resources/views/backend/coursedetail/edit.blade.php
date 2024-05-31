@extends('layouts.frontend-metronic-template')

@section('content')
    <h1>Edit Course Detail</h1>
    <form action="{{ route('coursedetail.update', $courseDetail->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $courseDetail->title }}">
        </div>
        <div class="form-group">
            <label for="description">Short Desc:</label>
            <textarea class="form-control" id="short_desc" name="short_desc" rows="4">{{ $courseDetail->short_desc }}</textarea>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control ckeditor" id="editor" name="description" rows="4">{{ $courseDetail->text }}</textarea>
        </div>
        <div class="form-group">
            <label for="video">Video:</label>
          
            <textarea class="form-control" id="video" name="video" rows="4">{{ $courseDetail->video }}</textarea>
            <label for="" class=""></label>add this code into iframe : <code>class="embed-responsive-item" width=100% height=320px</code></label>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $courseDetail->type }}">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status">
                <option value="active" {{ $courseDetail->status == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $courseDetail->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <div class="form-group">
            <label for="deleted">Deleted:</label>
            <select class="form-control" id="deleted" name="deleted">
                <option value="false" {{ $courseDetail->deleted == "false" ? 'selected' : '' }}>False</option>
                <option value="true" {{ $courseDetail->deleted == "true" ? 'selected' : '' }}>True</option>
               
            </select>
        </div>
        <input type="hidden" name="course_id" id="course_id" value={{ $course_id }}>
        <input type="hidden" name="course_detail_id" id="course_detail_id" value={{ $course_detail_id }}>
        
        <button type="submit" class="btn btn-primary">Update Course Detail</button>
    </form>
@endsection


