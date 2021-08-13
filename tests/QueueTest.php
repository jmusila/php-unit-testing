<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    protected $queue;

    protected function setUp(): void
    {
        $this->queue = new Queue();
    }

    public function testNewQueueIsEmpty()
    {
        $this->assertEquals(0, $this->queue->getCount());
    }

    public function testAnItemIsAddedToTHeQueue()
    {
        $this->queue->push('John');

        $this->assertEquals(1, $this->queue->getCount());
    }

    public function testAnItemIsREmoveFromTheQueue()
    {
        $this->queue->push('John');
        
        $item = $this->queue->pop();

        $this->assertEquals(0, $this->queue->getCount());

        $this->assertEquals('John', $item);
    }
}
