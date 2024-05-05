@extends('layouts.backend-template')

@section('content')
    <h1>+ Course Detail ({{$course->title}}) {{$idcourse}}</h1>
    <form action="{{ route('coursedetail.store', $idcourse) }}" method="POST" enctype="multipart/form-data">
        @csrf
        
            <input type="hidden" id="id_course" name="id_course" class="form-control" value="{{ $idcourse }}" readonly>
            <input type="hidden" id="slug_course" name="slug_course" class="form-control" value="{{ $course->slug }}" readonly>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="short_desc">Short Description:</label>
            <textarea id="short_desc" name="short_desc" class="form-control" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="text">Description:</label>
            <textarea id="text" name="text" class="form-control" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" id="type" name="type" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        
        <div class="form-group">
            <label for="video">Video:</label>
            <input type="text" id="video" name="video" class="form-control">
        </div>
        <div class="form-group">
            <label for="quote_text">Quote Text:</label>
            <textarea id="quote_text" name="quote_text" class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="quote_author">Quote Author:</label>
            <input type="text" id="quote_author" name="quote_author" class="form-control">
        </div>
        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="slug">Slug:</label>
            <input type="text" id="slug" name="slug" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" id="status" name="status" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="images_code">Images Code:</label>
            <input type="text" id="images_code" name="images_code" class="form-control">
        </div>
    
            <input type="hidden" id="order" name="order" class="form-control" value="">
            <input type="hidden" id="id_course" name="id_course" class="form-control" value="{{$course->id}}">
       
            <input type="hidden" id="deleted" name="deleted" class="form-control" value="false" required>
        
    
            <input type="hidden" id="category_id" name="category_id" class="form-control" value="">
    
        <button type="submit" class="btn btn-primary mb-5">Add Course Detail</button>
    </form>
@endsection
