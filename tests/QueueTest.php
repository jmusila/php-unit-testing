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

    public function testAnItemIsRemoveFromTheQueue()
    {
        $this->queue->push('John');

        $item = $this->queue->pop();

        $this->assertEquals(0, $this->queue->getCount());

        $this->assertEquals('John', $item);
    }

    public function testAnItemIsRemovedFromTheFrontOfTheQueue()
    {
        $this->queue->push('Item1');

        $this->queue->push('Item2');

        $this->assertEquals('Item1', $this->queue->pop());
    }

    public function testMaxNumberOfItemsCanBeAdded()
    {
        for ($i = 0; $i < Queue::MAX_ITEMS; $i++){
            $this->queue->push($i);
        }

        $this->assertEquals(Queue::MAX_ITEMS, $this->queue->getCount());
    }

    public function testExceptionThrownWhenAddingAnItemToAFullQueue()
    {
        for ($i = 0; $i < Queue::MAX_ITEMS; $i++){
            $this->queue->push($i);
        }

        $this->expectException(QueueException::class);

        $this->queue->push('Item3');
    }
}
