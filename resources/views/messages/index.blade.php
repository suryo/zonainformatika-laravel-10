@extends('layouts.frontend-metronic-template')
@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
    <div class="row">
        <div class="col-md-4">
            <h4>Users</h4> 
            <span id="loading" style="display: none;">
                load messages...please wait
            </span>
            <div class="user-list" style="height: 550px; overflow-y: scroll;">
                <ul class="list-group">
                    @foreach ($users as $user)
                        <li class="list-group-item">
                            <a href="{{ route('messages.index', $user->id) }}" class="user-link">{{ $user->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="mt-8">Messaging</h3>
                </div>
                <div class="card-body chat-box" id="chat-box">
                    @if ($selectedUser)
                        @foreach ($messages as $message)
                            @if ($message->sender_id == Auth::id())
                                <div class="d-flex justify-content-end mb-2">
                                    <div class="msg-container bg-info text-white p-2 rounded">
                                        {{ $message->message }}
                                    </div>
                                </div>
                            @else
                                <div class="d-flex justify-content-start mb-2">
                                    <div class="msg-container bg-dark text-white p-2 rounded">
                                        {{ $message->message }}
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <p>Select a user to start chatting</p>
                    @endif
                </div>
                @if ($selectedUser)
                    <div class="card-footer">
                        <form id="chat-form" method="POST" action="{{ url('messages') }}">
                            @csrf
                            <input type="hidden" name="receiver_id" id="receiver_id" value="{{ $selectedUser->id }}">
                            <div class="input-group">
                                <input type="text" name="message" class="form-control" placeholder="Type a message">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var chatBox = document.getElementById('chat-box');
    chatBox.scrollTop = chatBox.scrollHeight;

    // Add event listener to user links
    var userLinks = document.querySelectorAll('.user-link');
    userLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            document.getElementById('loading').style.display = 'inline';
        });
    });

    window.onload = function() {
        document.getElementById('loading').style.display = 'none';
    };
});
</script>

<style>
    .chat-box {
        height: 400px;
        overflow-y: scroll;
    }

    .msg-container {
        max-width: 70%;
    }
</style>
@endsection
