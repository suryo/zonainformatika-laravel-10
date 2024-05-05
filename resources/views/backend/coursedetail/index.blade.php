@extends('layouts.backend-template')

@section('content')
<div class="container">
    <h1>All Course Details {{$course_id}}</h1>
    <a href="{{ route('coursedetail.create', $course_id) }}">Add Course Detail</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($coursedetails as $detail)
                <tr>
                    <td>{{ $detail->title }}</td>
                    <td>{{ $detail->description }}</td>
                    <td>{{ $detail->type }}</td>
                    <td>
                        <a href="{{ route('coursedetail.edit', $detail->id) }}" class="btn btn-info btn-sm">Edit</a>
                        <form action="{{ route('coursedetail.destroy', $detail->id) }}" method="POST" class="d-inline">
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
