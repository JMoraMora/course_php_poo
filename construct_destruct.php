<?php

class Product
{
    public string $name;
    public float $price;
    public int $quantity;

    public function __construct(string $name, float $price, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function __destruct()
    {
        echo "Product {$this->name} was destroyed" . PHP_EOL;
    }
}

$product = new Product('Table', 100, 10);
echo "Product: {$product->name} - Price: {$product->price} - Quantity: {$product->quantity}" . PHP_EOL;
