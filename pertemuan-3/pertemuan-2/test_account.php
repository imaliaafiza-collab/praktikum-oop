<?php

require "Account.php";

$acc = new Account("Rani", 5000, "1234");

echo $acc->owner . PHP_EOL;            // BOLEH (public)
echo $acc->getBalance("1234") . PHP_EOL; // BOLEH (public method)

echo $acc->balance; // ERROR (protected)
// echo $acc->pin;     // ERROR (private)