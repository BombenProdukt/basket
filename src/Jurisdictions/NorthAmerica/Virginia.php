<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\VirginiaValueAddedTax;
use Money\Currency;

final class Virginia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var VirginiaValueAddedTax
     */
    private $tax;

    /**
     * Virginia constructor.
     */
    public function __construct()
    {
        $this->tax = new VirginiaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return VirginiaValueAddedTax
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
