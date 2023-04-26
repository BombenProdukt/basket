<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\NevadaValueAddedTax;
use Money\Currency;

final class Nevada implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NevadaValueAddedTax
     */
    private $tax;

    /**
     * Nevada constructor.
     */
    public function __construct()
    {
        $this->tax = new NevadaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return NevadaValueAddedTax
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
