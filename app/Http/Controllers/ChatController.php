<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Events\MessageSent;
use Illuminate\Http\Request;
use App\Events\PrivateChatEvent;
use Illuminate\Support\Facades\Broadcast;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function send(Request $request)
    {
        // Validate and save the message to the database
        $user = [];
        $message = [];
        // Broadcast the message
        broadcast(new MessageSent($user, $message));

        return response()->json(['status' => 'Message Sent!']);
    }
    
    public function privateChat($user1, $user2)
    {
        $chat = Chat::where(function ($query) use ($user1, $user2) {
            $query->where('user_id', $user1)
                  ->where('receiver_id', $user2);
        })->orWhere(function ($query) use ($user1, $user2) {
            $query->where('user_id', $user2)
                  ->where('receiver_id', $user1);
        })->get();

        return view('private-chat', compact('chat', 'user1', 'user2'));
    }

    public function sendPrivateMessage(Request $request)
    {
        $message = Chat::create([
            'user_id' => $request->user_id,
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);

        event(new PrivateChatEvent($message));
        // broadcast(new PrivateChatEvent($message));
        // broadcast(new PrivateChatEvent($message))->toOthers()->onQueue('broadcast');

        return response()->json($message);
    }
}
