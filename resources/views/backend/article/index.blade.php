@extends('layouts.backend-template')

@section('content')
<div class="container mt-4">
    <h1>Articles</h1>
    <a href="{{ route('article.create') }}" class="btn btn-primary mb-3">Add New Article</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->author }}</td>
                <td>{{ $article->category->category }}</td> <!-- Assumes Article model has a 'category' relationship -->
                <td>{{ $article->status }}</td>
                <td>
                    <a href="{{ route('article.show', $article->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('article.edit', $article->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('article.destroy', $article->id) }}" method="POST" class="d-inline">
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
