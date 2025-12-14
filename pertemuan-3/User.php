<?php
class User {
    public function __construct(
        public string $name = "Guest",
        public int $age = 0
    ) {}
}

$u1 = new User();
$u2 = new User("Andi");
$u3 = new User("Rani", 22);

echo $u1->name . " - " . $u1->age . "\n";
echo $u2->name . " - " . $u2->age . "\n";
echo $u3->name . " - " . $u3->age . "\n";
