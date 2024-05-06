@extends('layouts.frontend-template')

@section('content')
    <div class="container">
        <h1>Edit Profile</h1>
        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
            </div>
            <!-- Add more fields for editing profile -->
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
    </div>
@endsection
