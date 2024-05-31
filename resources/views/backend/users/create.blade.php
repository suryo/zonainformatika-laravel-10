@extends('layouts.frontend-metronic-template')

@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
    <h1>{{ isset($user) ? 'Edit User' : 'Create User' }}</h1>
    <form action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}" method="POST">
        @csrf
        @if(isset($user))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" type="text" id="name" name="name" value="{{ old('name', isset($user) ? $user->name : '') }}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="email" id="email" name="email" value="{{ old('email', isset($user) ? $user->email : '') }}">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-control" type="password" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="role_id">Role:</label>
            <input class="form-control" type="text" id="role_id" name="role_id" value="{{ old('role_id', isset($user) ? $user->role_id : '') }}">
        </div>
        <div class="form-group">
            <label for="nim">NIM:</label>
            <input class="form-control" type="text" id="nim" name="nim" value="{{ old('nim', isset($user) ? $user->nim : '') }}">
        </div>
        <div class="form-group">
            <label for="kampus">Kampus:</label>
            <input class="form-control" type="text" id="kampus" name="kampus" value="{{ old('kampus', isset($user) ? $user->kampus : '') }}">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input class="form-control" type="text" id="phone" name="phone" value="{{ old('phone', isset($user) ? $user->phone : '') }}">
        </div>
        <div class="form-group">
            <label for="negara">Negara:</label>
            <input class="form-control" type="text" id="negara" name="negara" value="{{ old('negara', isset($user) ? $user->negara : '') }}">
        </div>
        <div class="form-group">
            <label for="provinsi">Provinsi:</label>
            <input class="form-control" type="text" id="provinsi" name="provinsi" value="{{ old('provinsi', isset($user) ? $user->provinsi : '') }}">
        </div>
        <div class="form-group">
            <label for="kota">Kota:</label>
            <input class="form-control" type="text" id="kota" name="kota" value="{{ old('kota', isset($user) ? $user->kota : '') }}">
        </div>
        <div class="form-group">
            <label for="kecamatan">Kecamatan:</label>
            <input class="form-control" type="text" id="kecamatan" name="kecamatan" value="{{ old('kecamatan', isset($user) ? $user->kecamatan : '') }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input class="form-control" type="text" id="alamat" name="alamat" value="{{ old('alamat', isset($user) ? $user->alamat : '') }}">
        </div>
        <div class="form-group">
            <label for="kodepos">Kodepos:</label>
            <input class="form-control" type="text" id="kodepos" name="kodepos" value="{{ old('kodepos', isset($user) ? $user->kodepos : '') }}">
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir:</label>
            <input class="form-control" type="text" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir', isset($user) ? $user->tempat_lahir : '') }}">
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input class="form-control" type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir', isset($user) ? $user->tanggal_lahir : '') }}">
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($user) ? 'Update' : 'Create' }}</button>
    </form>
</div>
@endsection
