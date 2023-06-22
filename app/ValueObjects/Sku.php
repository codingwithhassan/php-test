<?php

namespace App\ValueObjects;

class Sku
{
    public function __construct(public string $sku)
    {}

    public static function fromString(string $sku): self
    {
        return new self($sku);
    }
}
