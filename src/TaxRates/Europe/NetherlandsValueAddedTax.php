<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\Europe;

use PreemStudio\Basket\Contracts\TaxRate;

final class NetherlandsValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * NetherlandsValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.21;
    }

    public function float(): float
    {
        return $this->rate;
    }

    public function percentage(): int
    {
        return intval($this->rate * 100);
    }
}
