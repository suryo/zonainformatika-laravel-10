@extends('layouts.frontend-metronic-template')
@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
    <h1>Message from {{ $message->sender->name }}</h1>
    <p>{{ $message->message }}</p>
    <a href="{{ route('messages.index') }}" class="btn btn-primary">Back to Messages</a>
</div>
@endsection
