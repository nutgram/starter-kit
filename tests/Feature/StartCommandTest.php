<?php

it('sends hello world', function () {
    bot()
        ->hearText('/start')
        ->reply()
        ->assertReplyText('Hello World!');
});