<?php
class Chef extends Employee
{
    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary)
    {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function prepareFood(FoodOrder $foodOrder): string
    {
        
    }
}