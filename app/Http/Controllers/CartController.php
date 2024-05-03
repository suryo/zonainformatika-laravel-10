<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Course;

class CartController extends Controller
{
    public function index()
    {

        $cart = Cart::where('carts.deleted', 'false')
            ->join('course', 'carts.course_id', '=', 'course.id')
            ->select('carts.*', 'course.title', 'course.price')
            ->get();
        $subtotal = $cart->sum('total');
        return view('cart', compact('cart', 'subtotal'));
    }

    public function create()
    {
        // Tampilkan formulir untuk menambahkan item ke keranjang (jika perlu)
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validasi data masukan
        // $request->validate([
        //     // Atur aturan validasi sesuai kebutuhan
        // ]);

        // Cart::create($request->all());

        $course = Course::findOrFail($request->course_id);

        Cart::create([
            'user_id' => $request->user_id,
            'course_id' => $request->course_id,
            'quantity' => $request->quantity,
            'total' => $request->price, // Hitung total berdasarkan harga produk
        ]);

        // Simpan data baru ke dalam database


        // Redirect ke halaman indeks atau halaman lain
        return redirect()->route('carts.index');
    }

    public function show($id)
    {
        $cart = Cart::findOrFail($id);
        return view('carts.show', compact('cart'));
    }

    public function edit($id)
    {
        $cart = Cart::findOrFail($id);
        return view('carts.edit', compact('cart'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data masukan
        $request->validate([
            // Atur aturan validasi sesuai kebutuhans
        ]);

        // Perbarui data yang ada di database
        $cart = Cart::findOrFail($id);
        $cart->update($request->all());

        // Redirect ke halaman indeks atau halaman lain
        return redirect()->route('carts.index');
    }

    public function destroy($id)
    {

       
        // Temukan data yang akan dihapus dan update deleted = true
        $cart = Cart::findOrFail($id);
        $cart->update(['deleted' => 'true']);

        // Redirect ke halaman indeks atau halaman lain
        return redirect()->route('carts.index');
    }

    public function clear()
    {
        // Set semua item di keranjang sebagai soft deleted
        Cart::where('deleted', 'false')->update(['deleted' => 'true']);

        // Redirect kembali ke halaman keranjang dengan pesan sukses
        return redirect()->route('carts.index')->with('success', 'All items have been soft deleted from the cart!');
    }
}
