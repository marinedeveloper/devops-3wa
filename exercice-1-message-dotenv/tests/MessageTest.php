<?php

namespace App\Tests;

// Framework de tests PHPUNIT
use PHPUnit\Framework\TestCase;

use App\Message;

class MessageTest extends TestCase
{
    protected Message $message;

    public function setUp():void
    {
        $this->message = new Message('fr');
    }

    public function testLangFr()
    {
        $this->assertSame("Bonjour tout le monde!", $this->message->get());
    }
}
