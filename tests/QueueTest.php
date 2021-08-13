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

        return $$this->queue;
    }

    public function testAnItemIsAddedToTHeQueue(Queue $queue)
    {
        $queue->push('John');

        $this->assertEquals(1, $queue->getCount());

        return $queue;
    }

    /**
     * @depends testAnItemIsAddedToTHeQueue
     */
    public function testAnItemIsREmoveFromTheQueue(Queue $queue)
    {
        $item = $queue->pop();

        $this->assertEquals(0, $queue->getCount());

        $this->assertEquals('John', $item);
    }
}
