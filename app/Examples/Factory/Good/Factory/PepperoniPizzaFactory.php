<?php

declare(strict_types=1);

namespace App\Examples\Factory\Good\Factory;

use App\Examples\Factory\PepperoniPizza;
use App\Examples\Factory\Pizza;

final class PepperoniPizzaFactory extends AbstractPizzaFactory
{
    protected function createPizza(): Pizza
    {
        return new PepperoniPizza();
    }
}
