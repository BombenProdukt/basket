<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\SouthAmerica;

use PreemStudio\Basket\Contracts\TaxRate;

class EcuadorValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * EcuadorValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.12;
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
