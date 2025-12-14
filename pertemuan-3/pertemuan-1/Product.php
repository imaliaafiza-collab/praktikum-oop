<?php

class Product
{
    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price)
    {
        $this->name  = $name;
        $this->price = $price;
    }

    public function getInfo(): string
    {
        return "Produk: {$this->name}, Harga: {$this->price}";
    }
}
