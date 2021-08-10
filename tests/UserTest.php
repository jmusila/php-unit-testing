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

    public function testUserHasFirstName()
    {
        $user = new User();

        $user->first_name = 'John';
        $user->surname = 'Doe';

        $this->assertEquals('John', $user->first_name);
    }
}