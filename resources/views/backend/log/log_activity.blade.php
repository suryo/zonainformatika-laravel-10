@extends('layouts.frontend-metronic-template')

@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
        <h1>Log Activity</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Activity</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($logActivities as $logActivity)
                <tr>
                    <td>{{ $logActivity->user->name }}</td>
                    <td>{{ $logActivity->activity }}</td>
                    <td>{{ $logActivity->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
