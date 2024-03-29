<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Discounts;

use BombenProdukt\Basket\Contracts\Discount;
use BombenProdukt\Basket\Contracts\Money as MoneyInterface;
use BombenProdukt\Basket\Product;
use Money\Money;

final class ValueDiscount implements Discount, MoneyInterface
{
    /**
     * @var Money
     */
    private $rate;

    /**
     * ValueDiscount constructor.
     */
    public function __construct(Money $rate)
    {
        $this->rate = $rate;
    }

    public function product(Product $product): Money
    {
        return $this->rate;
    }

    public function rate(): Money
    {
        return $this->rate;
    }

    public function toMoney(): Money
    {
        return $this->rate;
    }
}
