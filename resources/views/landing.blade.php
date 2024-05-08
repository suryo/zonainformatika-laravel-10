@extends('layouts.frontend-template')

@section('content')
    <div class="container">
        {{-- Search form --}}
        <form id="searchForm">
            <div class="form-group">
                <input type="text" class="form-control" id="searchInput" placeholder="Search Course">
            </div>
        </form>

        <div id="courseList">
            {{-- Course list will be loaded here --}}
            <div class="row">
                @foreach ($courses as $course)
                    <div class="col-md-3 mb-3">
                        <!-- Course card -->
                        <div class="card">
                            <img src="{{ asset('assets/image/course/' . $course->image) }}" class="card-img-top" alt="{{ $course->title }}">
                            <div class="card-body">
                                <p class="card-text">{{ $course->title }}</p>
                                <p class="card-text">Author: {{ $course->author }}</p>
                                <a href="{{ route('course.detail', ['id' => $course->id]) }}" class="btn btn-info">View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- jQuery for AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        // AJAX search functionality
        $(document).ready(function () {
            $('#searchInput').on('keyup', function () {
                var query = $(this).val();

                $.ajax({
                    type: 'GET',
                    url: '{{ route('course.search') }}',
                    data: {
                        query: query
                    },
                    success: function (response) {
                        $('#courseList').html(response);
                    }
                });
            });
        });
    </script>
@endsection
