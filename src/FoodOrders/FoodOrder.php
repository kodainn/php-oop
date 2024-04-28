<?php
class FoodOrder
{
    public array $items;
    public DateTime $orderTime;

    public function __construct($items, $orderTime)
    {
        $this->items = $items;
        $this->orderTime = $orderTime;
    }
}