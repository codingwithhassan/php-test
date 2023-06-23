<?php

namespace App\Services\Checkout;

use App\Models\Product;
use App\ValueObjects\Sku;

class ImpactCheckout implements CheckoutContract
{
    private array $products = [];

    public function scan(Sku $sku): void
    {
        if ($product = $sku->getProduct()) {
            $this->products[$product->sku][] = $product;
        } else {
            echo "Product not available";
        }
    }

    public function total(): int
    {
        $total = 0;
        foreach ($this->products as $sku => $products) {
            /**
             * @var Product $product
             */
            $product = $products[0];
            $count = count($products);
            if ($count > 1) {
                $prices = $product->specialPrices;

                if (count($prices) > 0) {
                    $quantity = $this->getMaxQty($prices, $count);

                    if ($quantity) {
                        // discount applied
                        do {
                            $total += $prices[$quantity];
                            $count = $count - $quantity;
                        } while ($count > $quantity);
                    }
                }
            }

            $total += $product->unitPrice * $count;
        }
        return $total;
    }

    /**
     * @param array $prices
     * @param int $count
     * @return array
     */
    private function getMaxQty(array $prices, int $count): ?int
    {
        $quantities = array_keys($prices);
        sort($quantities);

        $quantity = null;
        foreach ($quantities as $qty) {
            if ($count > $qty) {
                $quantity = $qty;
            }
        }
        return $quantity;
    }
}