@extends('layouts.frontend-template')

@section('content')
    <div class="container">
        <h1>Course Cart</h1>
        @if ($cart->isEmpty())
            <p>Your cart is empty.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Price</th>
                       
                       
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $item)
                        <tr>
                            <td>{{ $item['course']->title }}</td>
                            <td>Rp. {{ number_format($item['course']->price, 0, ',', '.') }}</td>
                           
                            <td>
                                <form action="{{ route('carts.destroy', $item->id) }}" method="POST">
                                    
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p>Total Price: {{ number_format($subtotal, 0, ',', '.') }}</p>
            <a href="{{ route('checkout') }}" class="btn btn-primary">Proceed to Checkout</a>
        @endif
    </div>
@endsection
