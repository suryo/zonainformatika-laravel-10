@extends('layouts.frontend-template')

@section('content')
    <div class="container">
        <!-- Bagian atas halaman -->
        <div class="row">
            <!-- Kolom untuk video -->
            <div class="col-md-6 col-sm-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <!-- Tambahkan URL video YouTube di sini -->
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PV1ESeZcjqg?si=L7XCC6e0xVW0DmE9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <!-- Kolom untuk informasi course -->
            <div class="col-md-6 col-sm-12 text-left">
                <h2>{{ $course->title }}</h2>
                <p>{{ $course->short_desc }}</p>
                <p>{{ $course->text }}</p>
                <p>Author: {{ $course->author }}</p>
            </div>
        </div>
        <!-- Akhir bagian atas halaman -->

        <!-- Bagian bawah halaman (detail course) -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h3>Course Detail</h3>
                <!-- Accordion untuk menampilkan detail course -->
                <div id="accordion">
                    <!-- Looping untuk setiap course detail -->
                    @foreach($coursedetails as $detail)
                        <div class="card">
                            <div class="card-header" id="heading{{ $detail->id }}">
                                <h5 class="mb-0 text-left">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{ $detail->id }}" aria-expanded="true" aria-controls="collapse{{ $detail->id }}">
                                        {{ $detail->title }}
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse{{ $detail->id }}" class="collapse" aria-labelledby="heading{{ $detail->id }}" data-parent="#accordion">
                                <div class="card-body row">
                                    <!-- Kolom untuk video -->
                                    <div class="col-md-6 col-sm-12">
                                        {!! $detail->video !!}
                                    </div>
                                    <!-- Kolom untuk informasi detail -->
                                    <div class="col-md-6 col-sm-12 text-left" style="padding-left: 20px;">
                                        <p>{{ $detail->title }}</p>
                                        <p>{{ $detail->text }}</p>
                                        <p>{{ $detail->type }}</p>
                                        <p>Author: {{ $detail->author }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Akhir bagian bawah halaman -->
    </div>
@endsection
