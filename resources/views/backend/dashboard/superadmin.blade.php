@extends('layouts.backend-template')

@section('content')
    <div class="container">
        super admin
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Course Technologies</h5>
                        <p class="card-text">{{ $courseTechnologiesCount }}</p>
                        <a href="{{ route('course_technologies.index') }}" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Course Categories</h5>
                        <p class="card-text">{{ $courseCategoriesCount }}</p>
                        <a href="{{ route('course_categories.index') }}" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Course Roadmaps</h5>
                        <p class="card-text">{{ $courseRoadmapsCount }}</p>
                        <a href="{{ route('roadmaps.index') }}" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Courses</h5>
                        <p class="card-text">{{ $coursesCount }}</p>
                        <a href="{{ route('courses.index') }}" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
