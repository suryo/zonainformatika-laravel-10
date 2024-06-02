<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index(Request $request, $userId = null)
    {
        $currentUser = Auth::user();
        $users = User::where('id', '!=', Auth::id())->get();

        if ($userId) {
            $selectedUser = User::findOrFail($userId);
                 $messages = Message::where(function ($query) use ($userId) {
                $query->where('sender_id', Auth::id())->where('receiver_id', $userId)
                    ->orWhere('receiver_id', Auth::id())->where('sender_id', $userId);
            })->orderBy('id')->get();
        } else {
            $messages = collect(); // Empty collection
            $selectedUser = null;
        }

        // if ($userId) {
        //     $selectedUser = User::find($userId);
        //     $messages = Message::where(function ($query) use ($userId) {
        //         $query->where('sender_id', Auth::id())->where('receiver_id', $userId)
        //             ->orWhere('receiver_id', Auth::id())->where('sender_id', $userId);
        //     })->orderBy('id')->get();
        // } else {
        //     $selectedUser = null;
        //     $messages = collect();
        // }

        return view('messages.index', compact('users', 'messages', 'selectedUser'));
    }

    

    public function create()
    {
        $users = User::where('id', '!=', Auth::id())->get();
        return view('messages.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'message' => 'required|string',
        ]);

        Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);

        return redirect()->route('messages.index', $request->receiver_id)->with('success', 'Message sent successfully.');
    }

    public function show(Message $message)
    {
        if ($message->receiver_id !== Auth::id() && $message->sender_id !== Auth::id()) {
            abort(403);
        }

        if ($message->receiver_id === Auth::id()) {
            $message->update(['read_at' => now()]);
        }

        return view('messages.show', compact('message'));
    }

    public function fetchMessages($id)
    {
        $user = Auth::user();
        $messages = Message::where(function($query) use ($user, $id) {
            $query->where('sender_id', $user->id)->where('receiver_id', $id);
        })->orWhere(function($query) use ($user, $id) {
            $query->where('sender_id', $id)->where('receiver_id', $user->id);
        })->orderBy('created_at', 'asc')->get();

        return response()->json($messages);
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'message' => 'required|string',
        ]);

        $message = Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);

        return response()->json($message);
    }
}
