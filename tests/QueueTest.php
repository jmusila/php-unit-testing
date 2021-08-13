<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    protected static $queue;

    protected function setUp(): void
    {
        static::$queue->clear();
    }

    public static function setUpBeforeClass(): void
    {
        static::$queue = new Queue();
    }

    public static function tearDownAfterClass(): void
    {
        static::$queue = null;
    }

    public function testNewQueueIsEmpty()
    {
        $this->assertEquals(0, static::$queue->getCount());
    }

    public function testAnItemIsAddedToTHeQueue()
    {
        static::$queue->push('John');

        $this->assertEquals(1, static::$queue->getCount());
    }

    public function testAnItemIsRemoveFromTheQueue()
    {
        static::$queue->push('John');

        $item = static::$queue->pop();

        $this->assertEquals(0, static::$queue->getCount());

        $this->assertEquals('John', $item);
    }

    public function testAnItemIsRemovedFromTheFrontOfTheQueue()
    {
        static::$queue->push('Item1');

        static::$queue->push('Item2');

        $this->assertEquals('Item1', static::$queue->pop());
    }
}
