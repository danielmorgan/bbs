<?php

use BulletinBoard\User;
use BulletinBoard\Message;

class MessagesTest extends TestCase
{
    /** @test */
    public function testIndexShowsAllMessages()
    {
        $users = factory(BulletinBoard\User::class, 3)
            ->create();

        $messages = factory(BulletinBoard\Message::class, 3)
            ->create();

        foreach ($messages as $message) {
            $this->visit('/')
                ->see('All messages')
                ->seeInDatabase('messages', ['body' => $message->body])
                ->see($message->body);
        }
    }

    /** @test */
    public function testCanPostNewMessage()
    {
        $this->visit('/')
            ->see('Post message');
    }
}
