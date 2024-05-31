@extends('layouts.frontend-metronic-template')

@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
    <h1>Article Categories</h1>
    <a href="{{ route('articlecategory.create') }}" class="btn btn-primary mb-3">Add New Category</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Slug</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->category }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ $category->status }}</td>
                <td>
                    <a href="{{ route('articlecategory.show', $category->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('articlecategory.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('articlecategory.destroy', $category->id) }}" method="POST" class="d-inline">
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
