<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\KansasValueAddedTax;

final class Kansas implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var KansasValueAddedTax
     */
    private $tax;

    /**
     * Kansas constructor.
     */
    public function __construct()
    {
        $this->tax = new KansasValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return KansasValueAddedTax
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
