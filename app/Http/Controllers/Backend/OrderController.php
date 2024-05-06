<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;

class OrderController extends Controller
{
    public function index()
    {
       
        $orders = Order::all()->map(function ($order) {
            return [
                'id' => $order->id,
                'nomerorder' => $order->nomerorder,
                'user_name' => $order->user->name,
                'user_id' => $order->user_id,
                'status' => $order->status,
                'subtotal' => $order->subtotal,
                'tax' => $order->tax,
                'ordertotal' => $order->ordertotal,
                'payment' => $order->payment,
                'payment_status' => $order->payment_status,
                'created_at' => $order->created_at,
                'orderdetails' => $order->orderDetails->map(function ($detail) {
                    return [
                        'id' => $detail->id,
                        'nomerorder' => $detail->nomerorder,
                        'course_id' => $detail->course_id, // Menambahkan course_id
                        'title' => $detail->course->title, // Menambahkan judul course
                        'price' => $detail->price, // Menambahkan harga
                        'status' => $detail->status,
                        // Tambahkan lebih banyak kolom detail jika diperlukan
                    ];
                })->toArray(), 
            ];
        });
        
        // $orders = Order::with('orderDetails')->get();
         //dd($orders);
        return view('backend.orders.index', compact('orders'));
    }

    public function create()
    {
        return view('backend.orders.create');
    }

    public function store(Request $request)
    {
        Order::create($request->all());
        return redirect()->route('orders.index');
    }

    public function show(Order $order)
    {
        return view('backend.orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        return view('backend.orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $order->update($request->all());
        return redirect()->route('orders.index');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }

    public function updatePaymentStatus(Request $request, $id)
{
    $order = Order::findOrFail($id);
    $order->payment_status = 'paid';
    $order->save();

    return redirect()->back()->with('success', 'Payment status has been updated to paid.');
}
}
