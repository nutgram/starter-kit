<?php

namespace Nutgram\StarterKit\Commands;

use SergiX44\Nutgram\Nutgram;

class StartCommand
{
    public function __invoke(Nutgram $bot): void
    {
        $bot->sendMessage('Hello World!');
    }
}