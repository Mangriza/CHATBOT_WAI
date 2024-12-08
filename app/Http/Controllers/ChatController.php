<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(Request $request, $model)
    {
        $messages = session()->get('chat_messages', []);
        return view('chatbox', compact('model', 'messages'));
    }
    
    public function store(Request $request, $model)
    {
        $message = strip_tags($request->input('message'));
        
        if (!$message) {
            return redirect()->back()->withErrors(['message' => 'Message cannot be empty.']);
        }
        
        $messages = session()->get('chat_messages', []);
        $messages[] = [
            'sender' => 'user',
            'text' => $message,
        ];
        
        session()->put('chat_messages', $messages);
        
        return redirect()->route('chatbox', ['model' => $model]);
    }
    
    public function endSession(Request $request, $model)
{

    session()->forget('chat_messages');
    
    return redirect()->route('dashboard');
}

    
    
    
}
