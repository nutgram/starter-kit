<?php

/*
|--------------------------------------------------------------------------
| Application Entry Point
|--------------------------------------------------------------------------
|
| This file serves as the main entry point for your bot application.
| It bootstraps the Nutgram instance and begins processing updates.
|
| Usage:
| - Polling: run `php public/index.php` from the project root.
| - Webhook: point your web server's document root to the `public/` folder.
|
| Modification of this file is generally not required.
|
*/

/** @var Nutgram $bot */

use SergiX44\Nutgram\Nutgram;

require('../src/bootstrap.php');

$bot->run();
