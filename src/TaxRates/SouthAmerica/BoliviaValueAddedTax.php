<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\SouthAmerica;

use PreemStudio\Basket\Contracts\TaxRate;

class BoliviaValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * BoliviaValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.13;
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
