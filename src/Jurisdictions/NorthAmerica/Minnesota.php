<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\MinnesotaValueAddedTax;
use Money\Currency;

final class Minnesota implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MinnesotaValueAddedTax
     */
    private $tax;

    /**
     * Minnesota constructor.
     */
    public function __construct()
    {
        $this->tax = new MinnesotaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return MinnesotaValueAddedTax
     */
    public function rate(): TaxRate
    {
        return $this->tax;
    }

    public function currency(): Currency
    {
        return $this->currency;
    }
}
