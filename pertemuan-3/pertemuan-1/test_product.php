<?php

require_once __DIR__ . "/Book.php";
require_once __DIR__ . "/DVD.php";

$book = new Book("Pemrograman PHP", 75000, "Andi");
$dvd  = new DVD("Belajar OOP PHP", 50000, 120);

echo $book->getInfo() . PHP_EOL;
echo $dvd->getInfo() . PHP_EOL;
