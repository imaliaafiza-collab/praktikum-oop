<?php

require_once __DIR__ . "/Vehicle.php";

class Motorcycle extends Vehicle
{
    public function accelerate(): string
    {
        return "Motor menambah kecepatan dengan tuas gas";
    }
}
