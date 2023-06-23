<?php

declare(strict_types=1);

namespace App\Examples\Factory\Good\Factory;

use App\Examples\Factory\CheesePizza;
use App\Examples\Factory\Pizza;

final class CheesePizzaFactory extends AbstractPizzaFactory
{
    protected function createPizza(): Pizza
    {
        return new CheesePizza();
    }
}
