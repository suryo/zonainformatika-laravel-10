<!-- resources/views/orders/show.blade.php -->

@extends('layouts.backend-template')

@section('content')
    <div class="container">
        <h1>Order Details</h1>
        <p><strong>ID:</strong> {{ $order->id }}</p>
        <p><strong>Nomor Order:</strong> {{ $order->nomerorder }}</p>
        <p><strong>Status:</strong> {{ $order->status }}</p>
        <p><strong>User ID:</strong> {{ $order->user_id }}</p>
        <a href="{{ route('orders.index') }}" class="btn btn-primary">Back to Orders</a>
    </div>
@endsection
