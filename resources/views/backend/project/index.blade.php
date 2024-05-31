@extends('layouts.frontend-metronic-template')

@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
    <h1>Projects</h1>
    <a href="{{ route('project.create') }}" class="btn btn-primary mb-3">Add New Project</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Project</th>
                <th>Author</th>
                <th>Price</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->project }}</td>
                <td>{{ $project->author }}</td>
                <td>{{ $project->price }}</td>
                <td>{{ $project->status }}</td>
                <td>
                    <a href="{{ route('project.show', $project->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('project.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('project.destroy', $project->id) }}" method="POST" class="d-inline">
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
