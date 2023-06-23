<?php

namespace App\Models;

class Product
{

    public String $name;
    public String $sku;
    public float $unitPrice;

    /**
     * key: Quantity
     * value: Special Price
     * @var array<int, float>
     */
    public array $specialPrices;

    /**
     * @param String $name
     * @param String $sku
     * @param float $unitPrice
     * @param float[] $specialPrices
     */
    public function __construct(string $name, string $sku, float $unitPrice, array $specialPrices = [])
    {
        $this->name = $name;
        $this->sku = $sku;
        $this->unitPrice = $unitPrice;
        $this->specialPrices = $specialPrices;
    }

    public function __toString(): string
    {
        return "Product($this->name, $this->sku, $this->unitPrice, $this->specialPrices)";
    }
}