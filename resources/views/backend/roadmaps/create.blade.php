@extends('layouts.backend-template')

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-4">Add Course Roadmap</h1>
        <form action="{{ route('course_roadmaps.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="short_desc">Short Description:</label>
                <input type="text" class="form-control" id="short_desc" name="short_desc" required>
            </div>
            <div class="form-group">
                <label for="text">Text:</label>
                <textarea class="form-control" id="text" name="text" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="type">Type:</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="text" class="form-control" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="image_landscape">Landscape Image:</label>
                <input type="text" class="form-control" id="image_landscape" name="image_landscape">
            </div>
            <div class="form-group">
                <label for="image_square">Square Image:</label>
                <input type="text" class="form-control" id="image_square" name="image_square">
            </div>
            <div class="form-group">
                <label for="level">Level:</label>
                <input type="text" class="form-control" id="level" name="level">
            </div>
            
            <div class="form-group">
                <label for="video">Video:</label>
                <input type="text" class="form-control" id="video" name="video">
            </div>
            <div class="form-group">
                <label for="quote_text">Quote Text:</label>
                <input type="text" class="form-control" id="quote_text" name="quote_text">
            </div>
            <div class="form-group">
                <label for="quote_author">Quote Author:</label>
                <input type="text" class="form-control" id="quote_author" name="quote_author">
            </div>
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" class="form-control" id="author" name="author">
            </div>
            <div class="form-group">
                <label for="slug">Slug:</label>
                <input type="text" class="form-control" id="slug" name="slug">
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" id="status" name="status">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            <!-- Tambahkan kolom tambahan sesuai kebutuhan -->
            <button type="submit" class="btn btn-primary">Add Roadmap</button>
        </form>
    </div>
@endsection
