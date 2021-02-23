<?php

namespace App\Http\Controllers;
use App\Reply;

use Illuminate\Http\Request;

class ConversationBestReplyController extends Controller
{
    public function store(Reply $reply){
        // $this->authorize('update-conversation', $reply->conversation); //Usando el Facade Gate en AuthServiceProvider
        $this->authorize('update', $reply->conversation); //Usando la política ConversationPolicy@update

        $reply->conversation->setBestReply($reply);

        return back();
    }
}
