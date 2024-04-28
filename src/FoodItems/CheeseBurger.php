<?php
class CheeseBurger extends FoodItem
{
    const CATEGORY = "CheeseBurger";

    public static function getCategory(): string
    {
        return self::CATEGORY;
    }
}