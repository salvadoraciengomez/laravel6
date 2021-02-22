<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conversation;

class ConversationsController extends Controller
{
    //
    public function index(){
        return view('conversations.index',[
            'conversations' => Conversation::all()
        ]);

    }

    public function show(Conversation $conversation){
        return view('conversations.show',[
            'conversation' => $conversation
        ]);
    }
}
