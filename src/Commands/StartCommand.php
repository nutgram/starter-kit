<?php

namespace Nutgram\StarterKit\Commands;

use SergiX44\Nutgram\Nutgram;

class StartCommand
{
    public function __invoke(Nutgram $bot): void
    {
        $bot->sendMessage('Hello from Nutgram 5.0 (Starter Kit 2.0)');
    }
}