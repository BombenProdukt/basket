<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\IowaValueAddedTax;

final class Iowa implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var IowaValueAddedTax
     */
    private $tax;

    /**
     * Iowa constructor.
     */
    public function __construct()
    {
        $this->tax = new IowaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return IowaValueAddedTax
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
