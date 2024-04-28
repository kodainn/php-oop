<?php
abstract class FoodItem
{
    public $name;
    public $description;
    public $price;

    abstract public static function getCategory(): string;
}