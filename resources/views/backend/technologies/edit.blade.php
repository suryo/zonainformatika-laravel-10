@extends('layouts.backend-template')

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-4">{{ isset($course_technology) ? 'Edit' : 'Add' }} Course Technology Update</h1>
        <form action="{{ isset($course_technology) ? route('course_technologies.update', $technology->id) : route('course_technologies.store') }}" method="POST">
            @csrf
            @if(isset($course_technology))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ isset($technology) ? $technology->name : '' }}" required>
            </div>
            <div class="form-group">
                <label for="slug">Slug:</label>
                <input type="text" id="slug" name="slug" class="form-control" value="{{ isset($technology) ? $technology->slug : '' }}" required>
            </div>
            <button type="submit" class="btn btn-primary">{{ isset($technology) ? 'Update' : 'Add' }} Technology</button>
        </form>
    </div>
@endsection
