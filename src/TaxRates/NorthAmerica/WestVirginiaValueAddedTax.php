<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\NorthAmerica;

use PreemStudio\Basket\Contracts\TaxRate;

final class WestVirginiaValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * WestVirginiaValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.06;
    }

    public function float(): float
    {
        return $this->rate;
    }

    public function percentage(): int
    {
        return (int) ($this->rate * 100);
    }
}
