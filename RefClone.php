<?php

class User {
    public string $name;
    public int $age;
}

$a = new User();
$a->name = "Budi";
$a->age = 20;

$b = $a;
$b->age = 25;

echo $a->age . PHP_EOL; // 25

$c = clone $a;
$c->age = 30;

echo $a->age . PHP_EOL; // 25
echo $c->age . PHP_EOL; // 30
