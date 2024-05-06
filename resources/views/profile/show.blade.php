@extends('layouts.frontend-template')

@section('content')
    <div class="container">
        <h1>Profile</h1>
        <p>Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <!-- Add more profile information as needed -->
       
        <a href="{{ route('profile.edit') }}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Edit Profile</a>
    
    </div>
@endsection
