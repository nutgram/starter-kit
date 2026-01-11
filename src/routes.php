<?php

/** @var Nutgram $bot */

use Nutgram\StarterKit\Commands\StartCommand;
use Nutgram\StarterKit\Conversations\HelloConversation;
use SergiX44\Nutgram\Nutgram;

$bot->onCommand('start', StartCommand::class);
$bot->onCommand('hello', HelloConversation::class);