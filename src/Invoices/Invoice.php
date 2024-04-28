<?php
class Invoice
{
    public float $finalPrice;
    public DateTime $orderTime;
    public int $estimatedTimeInMinutes;

    public function __construct($finalPrice, $orderTime, $estimatedTimeInMinutes)
    {
        $this->finalPrice = $finalPrice;
        $this->orderTime = $orderTime;
        $this->estimatedTimeInMinutes = $estimatedTimeInMinutes;
    }
}