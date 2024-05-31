@extends('layouts.frontend-metronic-template')

@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
        <h1 class="mt-4 mb-4">All Course Categories</h1>
        <a href="{{ route('course_categories.create') }}" class="btn btn-primary mb-4">Add Course Category</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->image }}</td>
                        <td>
                            <a href="{{ route('course_categories.edit', $category->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('course_categories.destroy', $category->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
