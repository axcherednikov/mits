<?php

declare(strict_types=1);

namespace App\Examples\Factory\Good\Factory;

use App\Examples\Factory\Pizza;
use App\Examples\Factory\VeggiePizza;

final class VeggiePizzaFactory extends AbstractPizzaFactory
{
    protected function createPizza(): Pizza
    {
        return new VeggiePizza();
    }
}
