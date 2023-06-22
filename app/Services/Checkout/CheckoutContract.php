<?php

namespace App\Services\Checkout;

use App\ValueObjects\Sku;

interface CheckoutContract
{
    public function scan(Sku $sku): void;

    public function total(): int;
}