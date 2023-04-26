<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Contracts;

use BombenProdukt\Basket\Product;

interface Category
{
    /**
     * @return mixed
     */
    public function categorise(Product $product);

    /**
     * @return mixed
     */
    public function name();
}
