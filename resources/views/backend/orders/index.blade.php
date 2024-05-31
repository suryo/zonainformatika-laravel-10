@extends('layouts.frontend-metronic-template')

@section('content')
    <div class="container">
        <h1>Course Orders</h1>
        <div id="accordion">
            
            @foreach ($orders as $order)
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center" id="heading{{ $order['id'] }}">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{ $order['id'] }}" aria-expanded="true" aria-controls="collapse{{ $order['id'] }}">
                                Order #{{ $order['nomerorder'] }} | {{ $order['user_name'] }} | {{ $order['created_at']->format('Y-m-d') }}
                            </button>
                        </h5>
                        <!-- Button to change payment status -->
                        @if ($order['payment_status'] == 'unpaid')
                        <form action="{{ route('orders.updatePaymentStatus', $order['id']) }}" method="POST" class="w-25">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-danger btn-block mt-2">Mark as Paid</button>
                        </form>
                    @else
                        
                            <button class="btn btn-success btn-block mt-2 w-25">Paid</button>
                      
                    @endif
                    </div>
                    <div id="collapse{{ $order['id'] }}" class="collapse" aria-labelledby="heading{{ $order['id'] }}" data-parent="#accordion">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order['orderdetails'] as $detail)
                                        <tr>
                                            <td>{{ $detail['title'] }}</td>
                                            <td>{{ number_format($detail['price'], 0, ',', '.') }}</td>
                                            <td>{{ $detail['status'] }}</td>
                                            <td>
                                                @if ($detail['status'] == 'inactive')
                                                    <form action="{{ route('orderdetails.update', $detail['id']) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-danger">Activate</button>
                                                    </form>
                                                @else
                                                <form action="{{ route('orderdetails.update', $detail['id']) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-primary">Inactivate</button>
                                                </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection