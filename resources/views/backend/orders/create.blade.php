<!-- resources/views/orders/create.blade.php -->
@extends('layouts.frontend-metronic-template')

@section('content')
    <h1>Create Order</h1>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <!-- Add form fields for order creation -->
        <button type="submit">Create Order</button>
    </form>
@endsection
