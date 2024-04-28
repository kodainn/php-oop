<?php
class Spaghett extends FoodItem
{
    const CATEGORY = "Spaghett";

    public static function getCategory(): string
    {
        return self::CATEGORY;
    }
}