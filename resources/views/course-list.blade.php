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