<?php

echo "FILE INI TERBACA\n";

class Vehicle
{
    public function accelerate(): string
    {
        return "Kendaraan sedang berakselerasi";
    }
}

class Car extends Vehicle
{
    public function accelerate(): string
    {
        return "Mobil menambah kecepatan dengan pedal gas";
    }
}

class Motorcycle extends Vehicle
{
    public function accelerate(): string
    {
        return "Motor menambah kecepatan dengan tuas gas";
    }
}

$vehicles = [
    new Car(),
    new Motorcycle()
];

foreach ($vehicles as $v) {
    echo $v->accelerate() . PHP_EOL;
}
