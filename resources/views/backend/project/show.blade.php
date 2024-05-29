@extends('layouts.backend-template')

@section('content')
<div class="container mt-4">
    <h1>Project Details</h1>
    <p><strong>ID:</strong> {{ $Project->id }}</p>
    <p><strong>Project:</strong> {{ $Project->project }}</p>
    <p><strong>Author:</strong> {{ $Project->author }}</p>
    <p><strong>Price:</strong> {{ $Project->price }}</p>
    <p> @if($Project->file_project)
        <p><strong>File:</strong>  <a href="{{ asset('assets/file_uploads/' . $Project->file_project) }}" target="_blank">View File</a></p>
    @endif</p>
    <p><strong>Slug:</strong> {{ $Project->slug }}</p>
    <p><strong>Status:</strong> {{ $Project->status }}</p>
    <a href="{{ route('project.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
