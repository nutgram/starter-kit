<?php

use PHPUnit\Framework\TestCase;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Testing\FakeNutgram;

pest()->extend(TestCase::class)->in('Feature');

pest()->beforeEach(function () {
    $bot = Nutgram::fake();
    require(dirname(__DIR__).'/src/routes.php');
    $this->bot = $bot;
});

function bot(): FakeNutgram
{
    return test()->bot;
}
