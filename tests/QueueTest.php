<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    public function testNewQueueIsEmpty()
    {
        $queue = new Queue();

        $this->assertEquals(0, $queue->getCount());
    }

    public function testAnItemIsAddedToTHeQueue()
    {
        $queue = new Queue();

        $queue->push('John');

        $this->assertEquals(1, $queue->getCount());
    }
}