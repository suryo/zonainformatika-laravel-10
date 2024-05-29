@extends('layouts.backend-template')

@section('content')
<div class="container mt-4">
    <h1>Edit Project</h1>
    <form action="{{ route('project.update', $Project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="project" class="form-label">Project</label>
            <input type="text" class="form-control" id="project" name="project" value="{{ $Project->project }}" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $Project->author }}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $Project->price }}">
        </div>
        <div class="mb-3">
            <label for="file_project" class="form-label">File Project</label>
            <input type="file" class="form-control" id="file_project" name="file_project">
            @if($Project->file_project)
                <p>Current file: <a href="{{ asset('assets/file_uploads/' . $Project->file_project) }}" target="_blank">View File</a></p>
            @endif
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $Project->slug }}" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="{{ $Project->status }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Project</button>
    </form>
</div>
@endsection
