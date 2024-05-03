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
                    <td>{{ $cart->total }}</td>
                   
                </tr>
            @endforeach
        </tbody>
    </table>

   

    <form action="{{ route('checkout.requestjoin') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="namalengkap">Nama Lengkap:</label>
            <input type="text" class="form-control" id="namalengkap" name="namalengkap">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
            <div class="form-group col-md-6">
                <label for="lastname">Last Name:</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6"">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group col-md-6"">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        </div>
   
        <input type="hidden" class="form-control" id="negara" name="negara" value="indonesia">
       
        <div class="form-group">
            <label for="provinsi">Provinsi:</label>
            <input type="text" class="form-control" id="provinsi" name="provinsi">
        </div>
        <div class="form-group">
            <label for="kota">Kota:</label>
            <input type="text" class="form-control" id="kota" name="kota">
        </div>
        <div class="form-group">
            <label for="kecamatan">Kecamatan:</label>
            <input type="text" class="form-control" id="kecamatan" name="kecamatan">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" id="alamat" name="alamat"></textarea>
        </div>
        <div class="form-group">
            <label for="kodepos">Kode Pos:</label>
            <input type="text" class="form-control" id="kodepos" name="kodepos">
        </div>
        <div class="form-group">
            <label for="addcatatan">Catatan Tambahan:</label>
            <textarea class="form-control" id="addcatatan" name="addcatatan"></textarea>
        </div>
        
            <input type="hidden" class="form-control" id="payment_id" name="payment_id" value="1">
       

            <input type="hidden" class="form-control" id="payment_method" name="payment_method" value="transfer">
      
       
            <input type="hidden" class="form-control" id="payment_status" name="payment_status" value="unpaid">
       

        <input type="hidden" name="order" value="{{ json_encode($cart) }}">
        {{-- <input type="hidden" name="orderDetails" value="{{ json_encode($orderDetails) }}"> --}}
        <button type="submit" class="btn btn-primary mr-2">Order Course</button>
    </form>

</div>
@endsection
