@extends('layouts.frontend-metronic-template')
@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
    <h1>Send Message</h1>
    <form method="POST" action="{{ route('messages.store') }}">
        @csrf
        <div class="form-group">
            <label for="receiver_id">Receiver</label>
            <select id="receiver_id" name="receiver_id" class="form-control" required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>
@endsection
