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
            <textarea id="text" name="text" class="form-control ckeditor" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="video">Video:</label>
          
            <textarea class="form-control" id="video" name="video" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <input type="hidden" name="deleted" id="deleted" value="false">
        {{-- <input type="hidden" name="course_id" id="course_id" value={{ $course_id }}>
        <input type="hidden" name="course_detail_id" id="course_detail_id" value={{ $course_detail_id }}> --}}



    
            {{-- <input type="hidden" id="order" name="order" class="form-control" value="">
            <input type="hidden" id="id_course" name="id_course" class="form-control" value="{{$course->id}}">
       
            <input type="hidden" id="deleted" name="deleted" class="form-control" value="false" required>
        
    
            <input type="hidden" id="category_id" name="category_id" class="form-control" value=""> --}}
    
        <button type="submit" class="btn btn-primary mb-5">Add Course Detail</button>
    </form>
@endsection
