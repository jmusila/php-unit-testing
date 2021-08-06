<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testCanGetUsersFullName()
    {
        require 'User.php';

        $user = new User();

        $user->first_name = 'John';
        $user->surname = 'Doe';

        $this->assertEquals('John Doe', $user->getFullName());
    }
}