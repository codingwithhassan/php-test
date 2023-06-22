<?php

namespace Tests;

use App\Services\Checkout\ImpactCheckout;
use App\ValueObjects\Sku;
use PHPUnit\Framework\TestCase;

class ImpactCheckoutTest extends TestCase
{
    public function test_scanning_sku_a_returns_total_of_50()
    {
        $checkout = new ImpactCheckout;

        $checkout->scan(Sku::fromString('A'));

        $this->assertEquals(50, $checkout->total(), 'Checkout total does not equal expected value of 50');
    }
}