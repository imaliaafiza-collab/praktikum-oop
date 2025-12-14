<?php

require_once __DIR__ . "/Vehicle.php";

class Car extends Vehicle
{
    public function accelerate(): string
    {
        return "Mobil menambah kecepatan dengan pedal gas";
    }
}
