<?php

use Mockery\Adapter\Phpunit\MockeryTestCase;
use PHPUnit\Framework\TestCase;

class ExampleTest extends MockeryTestCase
{
    public function testAddingTwoPlusTwoReusltsInFour()
    {
        $this->assertEquals(4, 2+2);
    }

    public function testTrueIsTrue()
    {
        $this->assertTrue(true);
    }
}
