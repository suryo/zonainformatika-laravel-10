@extends('layouts.frontend-template')

@section('content')
    <div class="container">
        <h2>Welcome to Our Website</h2>
        <p>This is the landing page content.</p>
        @auth <!-- Memeriksa apakah pengguna sudah login -->
            <div>
                Welcome {{ auth()->user()->name }} ({{ auth()->user()->email }})
            </div>
        @endauth

        @php
            if (auth()->user()) {
                $user = auth()->user();
                $role = $user->role ?? null; // Dapatkan peran pengguna, jika ada
                $roleId = auth()->user()->role_id; // Dapatkan ID peran pengguna
                $userRole = auth()->user()->getRole($roleId); // Panggil metode getRole() dengan ID peran pengguna
            }
        @endphp

        @if (isset($userRole))
            <p>Role: {{ $userRole->role }}</p> <!-- Tampilkan peran pengguna jika ada -->
        @endif

        <div class="row">
            @foreach ($courses as $course)
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('assets/image/course/' . $course->image) }}" class="card-img-top" alt="{{ $course->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->title }}</h5>
                            @if ($course->price_buy == 0)
                            <span class="badge badge-info">Free</span>
                            @else
                                <p class="card-text">Rp. {{ number_format($course->price_buy, 0, ',', '.') }}</p>
                            @endif
                            <p class="card-text">Author: {{ $course->author }}</p>
                            <a href="{{ route('course.detail', ['id' => $course->id]) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
