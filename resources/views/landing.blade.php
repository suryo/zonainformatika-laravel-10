@extends('layouts.frontend-template')

@section('content')
    <div class="container">
        {{-- Banner image slider --}}
        <div id="bannerCarousel" class="carousel slide mb-4" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://via.placeholder.com/1200x400?text=Image+1" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1200x400?text=Image+2" class="d-block w-100" alt="Image 2">
                </div>
            </div>
            <a class="carousel-control-prev" href="#bannerCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#bannerCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        {{-- Search form --}}
        <form id="searchForm">
            <div class="form-group">
                <input type="text" class="form-control" id="searchInput" placeholder="Search Course">
            </div>
        </form>

        {{-- Course list --}}
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
                                @if ($course->price == 0 )
                                <p class="card-text" style="color: rgb(0, 189, 180); font-weight: bold;">Free</p>
                                @else
                                <p class="card-text">Rp. {{ number_format($course->price, 0, ',', '.') }}</p>
                                @endif
                               
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
