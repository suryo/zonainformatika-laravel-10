@extends('layouts.frontend-metronic-template')

@section('content')
<div class="container mt-5 mt-lg-10">
    {{-- Banner image slider --}}
    <div id="bannerCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/image/banner/1.jpg') }}" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/image/banner/2.jpg') }}" class="d-block w-100" alt="Image 2">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- Search form --}}
    <form id="searchForm">
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="searchInput" placeholder="Search Course">
            {{-- <button class="btn btn-outline-secondary" type="button">Search</button> --}}
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
                    <img src="{{ asset('assets/image/course/' . $course->image) }}" class="card-img-top d-none d-md-block" alt="{{ $course->title }}">
                    <div class="card-body">
                        <p class="card-text"><strong>{{ $course->title }}</strong></p>
                        <p class="card-text">Author: {{ $course->author }}</p>
                        @if ($course->price == 0 )
                        <p class="card-text text-success">Free</p>
                        @else
                        <p class="card-text">Rp. {{ number_format($course->price, 0, ',', '.') }}</p>
                        @endif
                        <a href="{{ route('course.detail', ['id' => $course->id]) }}" class="btn btn-sm btn-light-info">View Details</a>
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
