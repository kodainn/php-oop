<?php
class Fettuccine extends FoodItem
{
    const CATEGORY = "Fettuccine";

    public static function getCategory(): string
    {
        return self::CATEGORY;
    }
}