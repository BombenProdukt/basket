<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\TaxRates\NorthAmerica;

use BombenProdukt\Basket\Contracts\TaxRate;

final class PuertoRicoValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * PuertoRicoValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.0105;
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
