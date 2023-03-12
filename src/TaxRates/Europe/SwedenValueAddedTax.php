<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\Europe;

use PreemStudio\Basket\Contracts\TaxRate;

class SwedenValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * SwedenValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.25;
    }

    /**
     * @return float
     */
    public function float(): float
    {
        return $this->rate;
    }

    /**
     * @return int
     */
    public function percentage(): int
    {
        return intval($this->rate * 100);
    }
}