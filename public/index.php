<?php

/*
|--------------------------------------------------------------------------
| Webhook Entry Point
|--------------------------------------------------------------------------
|
| This file serves as the main entry point for your bot application.
| It bootstraps the Nutgram instance and begins processing updates.
|
| This file must be used only for webhook mode.
|
*/

/** @var Nutgram $bot */

use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\RunningMode\Webhook;

if(PHP_SAPI === 'cli') {
    throw new Exception('This file can only be run from the web server.');
}

require_once(dirname(__DIR__).'/vendor/autoload.php');
require_once(dirname(__DIR__).'/src/bootstrap.php');

$webhook = new Webhook(secretToken: $_ENV['WEBHOOK_SECRET']);
$webhook->setSafeMode(true);
$bot->setRunningMode($webhook);

$bot->run();
