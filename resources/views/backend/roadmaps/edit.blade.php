@extends('layouts.backend-template')

@section('content')
    <div class="container pb-5">
        <h1>Edit Course Roadmap</h1>
        <form action="{{ route('course_roadmaps.update', $roadmap->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ $roadmap->title }}">
            </div>
            <div class="form-group">
                <label for="short_desc">Short Description:</label>
                <input type="text" id="short_desc" name="short_desc" class="form-control" value="{{ $roadmap->short_desc }}">
            </div>
            <div class="form-group">
                <label for="text">Text:</label>
                <textarea id="text" name="text" class="form-control">{{ $roadmap->text }}</textarea>
            </div>
            <div class="form-group">
                <label for="type">Type:</label>
                <input type="text" id="type" name="type" class="form-control" value="{{ $roadmap->type }}">
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="text" id="image" name="image" class="form-control" value="{{ $roadmap->image }}">
            </div>
            <div class="form-group">
                <label for="image_landscape">Landscape Image:</label>
                <input type="text" id="image_landscape" name="image_landscape" class="form-control" value="{{ $roadmap->image_landscape }}">
            </div>
            <div class="form-group">
                <label for="image_square">Square Image:</label>
                <input type="text" id="image_square" name="image_square" class="form-control" value="{{ $roadmap->image_square }}">
            </div>
            <div class="form-group">
                <label for="level">Level:</label>
                <input type="text" id="level" name="level" class="form-control" value="{{ $roadmap->level }}">
            </div>
            <div class="form-group">
                <label for="price_buy">Price Buy:</label>
                <input type="text" id="price_buy" name="price_buy" class="form-control" value="{{ $roadmap->price_buy }}">
            </div>
            <div class="form-group">
                <label for="price_rent">Price Rent:</label>
                <input type="text" id="price_rent" name="price_rent" class="form-control" value="{{ $roadmap->price_rent }}">
            </div>
            <div class="form-group">
                <label for="video">Video:</label>
                <input type="text" id="video" name="video" class="form-control" value="{{ $roadmap->video }}">
            </div>
            <div class="form-group">
                <label for="quote_text">Quote Text:</label>
                <input type="text" id="quote_text" name="quote_text" class="form-control" value="{{ $roadmap->quote_text }}">
            </div>
            <div class="form-group">
                <label for="quote_author">Quote Author:</label>
                <input type="text" id="quote_author" name="quote_author" class="form-control" value="{{ $roadmap->quote_author }}">
            </div>
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" id="author" name="author" class="form-control" value="{{ $roadmap->author }}">
            </div>
            <div class="form-group">
                <label for="slug">Slug:</label>
                <input type="text" id="slug" name="slug" class="form-control" value="{{ $roadmap->slug }}">
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" id="status" name="status" class="form-control" value="{{ $roadmap->status }}">
            </div>
            <div class="form-group">
                <label for="images_code">Images Code:</label>
                <input type="text" id="images_code" name="images_code" class="form-control" value="{{ $roadmap->images_code }}">
            </div>
            <div class="form-group">
                <label for="order">Order:</label>
                <input type="text" id="order" name="order" class="form-control" value="{{ $roadmap->order }}">
            </div>
            <div class="form-group">
                <label for="category_id">Category ID:</label>
                <input type="text" id="category_id" name="category_id" class="form-control" value="{{ $roadmap->category_id }}">
            </div>
            <!-- Add other fields as needed -->
            <button type="submit" class="btn btn-primary">Update Roadmap</button>
        </form>
    </div>
@endsection
