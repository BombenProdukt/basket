<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\SouthAmerica;

use PreemStudio\Basket\Contracts\TaxRate;

final class GuyanaValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * GuyanaValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.16;
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
