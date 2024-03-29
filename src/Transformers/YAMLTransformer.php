<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Transformers;

use BombenProdukt\Basket\Order;
use Symfony\Component\Yaml\Dumper;

final class YAMLTransformer extends AbstractTransformer
{
    public function transform(Order $order): string
    {
        return (new Dumper())->dump($this->build($order));
    }
}
