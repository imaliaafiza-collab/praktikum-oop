<?php

require_once __DIR__ . "/Product.php";

class Book extends Product
{
    private string $author;

    public function __construct(string $name, int $price, string $author)
    {
        parent::__construct($name, $price);
        $this->author = $author;
    }

    // Overriding method
    public function getInfo(): string
    {
        return "Buku: {$this->name}, Penulis: {$this->author}, Harga: {$this->price}";
    }
}
