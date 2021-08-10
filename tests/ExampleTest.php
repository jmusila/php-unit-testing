<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
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
