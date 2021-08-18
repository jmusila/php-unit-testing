<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testCanGetUsersFullName()
    {
        $user = new User();

        $user->first_name = 'John';
        $user->surname = 'Doe';

        $this->assertEquals('John Doe', $user->getFullName());
    }

    public function testFullNameIsEmptyByDefault()
    {
        $user = new User();

        $this->assertEquals('', $user->getFullName());
    }

    public function testNotificationIsSent()
    {
        $user = new User;

        $mock_mailer = $this->createMock(Mailer::class);

        $mock_mailer->method('sendMessage')->willReturn(true);

        $user->email = 'johndoe@gmail.com';

        $this->assertTrue($user->notify("Hello"));
    }

}
