<?php

/*
|--------------------------------------------------------------------------
| CLI Entry Point
|--------------------------------------------------------------------------
|
| This file serves as the main entry point for your bot application.
| It bootstraps the Nutgram instance and begins processing updates.
|
| This file must be used only via CLI.
|
*/

/** @var Nutgram $bot */

use SergiX44\Nutgram\Nutgram;

if(PHP_SAPI !== 'cli') {
    throw new Exception('This file can only be run from the command line.');
}

require_once(__DIR__.'/vendor/autoload.php');
require_once(__DIR__.'/src/bootstrap.php');

$bot->run();