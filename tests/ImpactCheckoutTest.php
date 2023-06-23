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

    public function test_4_products_with_1_special_price_total_of_180()
    {
        $checkout = new ImpactCheckout;

        $checkout->scan(Sku::fromString('A'));
        $checkout->scan(Sku::fromString('A'));
        $checkout->scan(Sku::fromString('A'));
        $checkout->scan(Sku::fromString('A'));

        $this->assertEquals(130 + 50, $checkout->total(), 'Checkout total does not equal expected value of 180');
    }

    public function test_multiple_products_with_multiple_special_prices_total_of_385()
    {
        $checkout = new ImpactCheckout;

        $checkout->scan(Sku::fromString('A'));
        $checkout->scan(Sku::fromString('A'));
        $checkout->scan(Sku::fromString('A'));
        $checkout->scan(Sku::fromString('A'));
        $checkout->scan(Sku::fromString('A'));
        $checkout->scan(Sku::fromString('A'));
        $checkout->scan(Sku::fromString('A'));
        $checkout->scan(Sku::fromString('B'));
        $checkout->scan(Sku::fromString('B'));
        $checkout->scan(Sku::fromString('B'));

        $this->assertEquals(130 + 130 + 50 + 45 + 30, $checkout->total(), 'Checkout total does not equal expected value of 385');
    }
}