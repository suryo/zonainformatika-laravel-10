<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderDetail;

class OrderDetailController extends Controller
{
    public function updateStatus(Request $request, $id)
    {
        // Cari order detail berdasarkan ID
        $orderDetail = OrderDetail::findOrFail($id);

        // Periksa apakah status order detail adalah 'inactive'
        if ($orderDetail->status == 'inactive') {
            // Jika ya, ubah status menjadi 'active'
            $orderDetail->status = 'active';
            $orderDetail->save();

            // Redirect kembali ke halaman sebelumnya dengan pesan sukses
            return redirect()->back()->with('success', 'Order detail status has been updated successfully.');
        } else if ($orderDetail->status == 'active') {
             // Jika ya, ubah status menjadi 'active'
             $orderDetail->status = 'inactive';
             $orderDetail->save();
 
             // Redirect kembali ke halaman sebelumnya dengan pesan sukses
             return redirect()->back()->with('success', 'Order detail status has been updated successfully.');
        } else {
            // Jika status bukan 'inactive', beri pesan error
            return redirect()->back()->with('error', 'Order detail status is not inactive.');
        }
    }
}
