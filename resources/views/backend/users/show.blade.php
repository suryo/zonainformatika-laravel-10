@extends('layouts.frontend-metronic-template')

@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
    <h1>User Details</h1>
    <table class="table">
        <tr>
            <th>Name</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th>Role</th>
            <td>{{ $user->role_id }}</td>
        </tr>
        <tr>
            <th>NIM</th>
            <td>{{ $user->nim }}</td>
        </tr>
        <tr>
            <th>Kampus</th>
            <td>{{ $user->kampus }}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{ $user->phone }}</td>
        </tr>
        <tr>
            <th>Negara</th>
            <td>{{ $user->negara }}</td>
        </tr>
        <tr>
            <th>Provinsi</th>
            <td>{{ $user->provinsi }}</td>
        </tr>
        <tr>
            <th>Kota</th>
            <td>{{ $user->kota }}</td>
        </tr>
        <tr>
            <th>Kecamatan</th>
            <td>{{ $user->kecamatan }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $user->alamat }}</td>
        </tr>
        <tr>
            <th>Kodepos</th>
            <td>{{ $user->kodepos }}</td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <td>{{ $user->tempat_lahir }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $user->tanggal_lahir }}</td>
        </tr>
    </table>
</div>
@endsection
