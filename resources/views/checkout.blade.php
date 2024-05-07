@extends('layouts.frontend-template')

@section('content')
<div class="container">
    <h1>Course Subscribe</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Author</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cart as $cart)
                <tr>
                    <td>{{ $cart->title }}</td>
                    <td>{{ $cart->short_desc }}</td>
                    <td>{{ $cart->author }}</td>
                    <td>Rp. {{ number_format($cart->total, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <form action="{{ route('checkout.requestjoin') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="addcatatan">Catatan Tambahan:</label>
            <textarea class="form-control" id="addcatatan" name="addcatatan"></textarea>
        </div>
            <input type="hidden" class="form-control" id="payment_id" name="payment_id" value="1">
            <input type="hidden" class="form-control" id="payment_method" name="payment_method" value="transfer">
            <input type="hidden" class="form-control" id="payment_status" name="payment_status" value="unpaid">
            <input type="hidden" name="order" value="{{ json_encode($cart) }}">
        <button type="submit" class="btn btn-primary mr-2">Order Course</button>
    </form>

</div>
@endsection
