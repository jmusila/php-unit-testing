<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    public function testNewQueueIsEmpty()
    {
        $queue = new Queue();

        $this->assertEquals(0, $queue->getCount());

        return $queue;
    }

    /**
     * @depends testNewQueueIsEmpty
     */
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
