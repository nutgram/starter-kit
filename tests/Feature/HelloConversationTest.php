<?php

it('asks name', function () {
    bot()
        ->willStartConversation()
        ->hearText('/hello')
        ->reply()
        ->assertReplyText('What is your name?')
        ->assertActiveConversation();
});
