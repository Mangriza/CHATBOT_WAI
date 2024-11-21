<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    // Menampilkan halaman chatbox dengan model tertentu
    public function index(Request $request, $model)
    {
        $messages = session()->get('chat_messages', []);
        return view('chatbox', compact('model', 'messages'));
    }
    

    // Tambahkan pesan ke sesi
    public function store(Request $request, $model)
    {
        $message = strip_tags($request->input('message')); // Mencegah XSS dan memastikan input tidak berbahaya
        
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
    

    // Hapus sesi (mengakhiri percakapan)
    public function endSession(Request $request, $model)
{
    // Hapus semua pesan dari sesi
    session()->forget('chat_messages');
    
    // Redirect ke dashboard setelah sesi berakhir
    return redirect()->route('dashboard');
}

    
    
    
}
