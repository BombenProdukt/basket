<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\FranceValueAddedTax;
use Money\Currency;

final class France implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var FranceValueAddedTax
     */
    private $tax;

    /**
     * France constructor.
     */
    public function __construct()
    {
        $this->tax = new FranceValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return FranceValueAddedTax
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
