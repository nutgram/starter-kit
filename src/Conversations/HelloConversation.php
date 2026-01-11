<?php

namespace Nutgram\StarterKit\Conversations;

use SergiX44\Nutgram\Conversations\Conversation;
use SergiX44\Nutgram\Nutgram;

class HelloConversation extends Conversation
{
    public function start(Nutgram $bot)
    {
        $bot->sendMessage('What is your name?');
        
        $this->next('getName');
    }
    
    public function getName(Nutgram $bot)
    {
        $text = $bot->message()->text;
        
        if(empty($text)){
            $bot->sendMessage('Invalid input. What is your name?');
            $this->next('getName');
            return;
        }
        
        $bot->sendMessage("Hello, $text!");
        $this->end();
    }
}