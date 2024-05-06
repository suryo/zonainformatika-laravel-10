<!-- resources/views/orders/edit.blade.php -->

@extends('layouts.backend-template')

@section('content')
    <div class="container">
        <h1>{{ isset($order) ? 'Edit Order' : 'Add New Order' }}</h1>
        <form action="{{ isset($order) ? route('orders.update', $order->id) : route('orders.store') }}" method="POST">
            @csrf
            @if(isset($order))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="nomerorder">Nomor Order:</label>
                <input type="text" id="nomerorder" name="nomerorder" class="form-control" value="{{ isset($order) ? $order->nomerorder : '' }}">
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" id="status" name="status" class="form-control" value="{{ isset($order) ? $order->status : '' }}">
            </div>
            <div class="form-group">
                <label for="payment_status">Payment Status</label>
                <select class="form-control" id="payment_status" name="payment_status">
                    <option value="unpaid" {{ $order->payment_status === 'unpaid' ? 'selected' : '' }}>Unpaid</option>
                    <option value="paid" {{ $order->payment_status === 'paid' ? 'selected' : '' }}>Paid</option>
                </select>
            </div>
            <div class="form-group">
                <label for="user_id">User ID:</label>
                <input type="text" id="user_id" name="user_id" class="form-control" value="{{ isset($order) ? $order->user_id : '' }}">
            </div>
            <button type="submit" class="btn btn-primary">{{ isset($order) ? 'Update Order' : 'Add Order' }}</button>
        </form>
    </div>
@endsection