<?php

namespace App\Data;

use App\Models\Product;

class DB
{
    public static function getProducts(): array
    {
        return [
            new Product('A', 'A', 50.0, [
                3 => 130.0,
            ]),
            new Product('B', 'B', 30, [
                2 => 45,
            ]),
            new Product('C', 'C', 20),
            new Product('D', 'D', 15),
        ];
    }
}