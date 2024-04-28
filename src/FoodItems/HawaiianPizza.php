<?php
class HawaiianPizza extends FoodItem
{
    const CATEGORY = "HawaiianPizza";

    public static function getCategory(): string
    {
        return self::CATEGORY;
    }
}