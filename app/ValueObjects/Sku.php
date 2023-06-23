<?php

namespace App\ValueObjects;

use App\Data\DB;
use App\Models\Product;

class Sku
{
    private Product $product;

    public function __construct(public string $sku)
    {
        foreach (DB::getProducts() as $product){
            if($product->sku == $this->sku){
                $this->product = $product;
            }
        }
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    public static function fromString(string $sku): self
    {
        return new self($sku);
    }
}
