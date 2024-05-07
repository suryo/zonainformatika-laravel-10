@extends('layouts.frontend-template')


@section('content')
    <div class="container">
        <div class="container">
            <h2>INVOICE #{{ $orderNumber }}</h2>
            <p>Order Subtotal : {{ $orderSubtotal }}</p>
            <p>Tax : {{ $tax }}</p>
            <h3>Total : Rp. {{ number_format($orderTotal, 0, ',', '.') }}</h3>
           <p>
            Lakukan Pembayaran melalui rekening berikut
           </p>
           <p><strong>BRI</strong> Suryo Atmojo</p>
           <p><strong>BCA</strong> Suryo Atmojo</p>
           
           
           <br>
           <p>Konfirmasi Pembayaran melalui WA 081217173406</p>
        </div>
    </div>
@endsection
