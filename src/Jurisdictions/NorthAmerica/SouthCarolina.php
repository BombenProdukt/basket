<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\SouthCarolinaValueAddedTax;
use Money\Currency;

final class SouthCarolina implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SouthCarolinaValueAddedTax
     */
    private $tax;

    /**
     * SouthCarolina constructor.
     */
    public function __construct()
    {
        $this->tax = new SouthCarolinaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return SouthCarolinaValueAddedTax
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
