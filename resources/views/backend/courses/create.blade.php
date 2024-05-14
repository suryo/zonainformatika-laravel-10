@extends('layouts.backend-template')

@section('content')
    <div class="container">
        <h1>Create Course</h1>
        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="title">Author:</label>
                <input type="text" class="form-control" id="author" name="author">
            </div>

            <div class="form-group">
                <label for="title">Image:</label>
                <input type="text" class="form-control" id="image" name="image">
            </div>
            
                <input type="hidden" class="form-control" id="slug" name="category_id" value=1>
            
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
