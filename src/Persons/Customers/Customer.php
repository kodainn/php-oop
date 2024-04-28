<?php
class Customer extends Person
{
    public function __construct($name, $age, $address)
    {
        parent::__construct($name, $age, $address);   
    }

    public function interestedCategories(Restaurant $restaurant): array
    {

    }

    public function order(Restaurant $restaurant, array $categories): Invoice
    {

    }
}