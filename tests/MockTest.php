<?php

use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
    public function testMock()
    {
        $mailer = new Mailer();

        $result = $mailer->sendMessage('johndoe@gmail.com', 'Hello');
    }
}