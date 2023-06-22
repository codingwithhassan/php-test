<?php

namespace App\Services\Checkout;

use App\ValueObjects\Sku;

class ImpactCheckout implements CheckoutContract
{
    public function scan(Sku $sku): void
    {
        // TODO: Implement scan() method.
    }

    public function total(): int
    {
        // TODO: Implement total() method.
    }
}