<?php 

class Queue
{
    protected $items = [];

    public function push($item)
    {
        $this->items[] = $item;
    }
}