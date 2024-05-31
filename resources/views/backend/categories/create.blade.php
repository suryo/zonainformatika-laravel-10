@extends('layouts.frontend-metronic-template')

@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
        <h1>Add Course Category</h1>
        <form action="{{ route('course_categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="text" class="form-control" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
    </div>
@endsection
