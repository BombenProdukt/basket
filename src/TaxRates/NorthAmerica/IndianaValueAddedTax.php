<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\TaxRates\NorthAmerica;

use BombenProdukt\Basket\Contracts\TaxRate;

final class IndianaValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * IndianaValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.07;
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
