<?php

use Dotenv\Dotenv;
use SergiX44\Nutgram\Configuration;
use SergiX44\Nutgram\Nutgram;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\Cache\Psr16Cache;

require_once('../vendor/autoload.php');

//load env
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();

//init cache
$cacheDir = dirname(__DIR__).'/cache';

if(!file_exists($cacheDir)){
    if (!mkdir($cacheDir, 0755, true) && !is_dir($cacheDir)) {
        throw new \RuntimeException(sprintf('Directory "%s" was not created', $cacheDir));
    }
}

$cache = new Psr16Cache(new FilesystemAdapter(directory: $cacheDir));

//init nutgram
$bot = new Nutgram($_ENV['TOKEN'], new Configuration(
    clientTimeout: 15,
    cache: $cache,
));

//load routes
require_once('routes.php');