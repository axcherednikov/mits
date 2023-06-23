<?php

declare(strict_types=1);

namespace App\Examples\Factory\Good;

use App\Examples\Factory\Good\Factory\AbstractPizzaFactory;
use App\Examples\Factory\Pizza;

final class PizzaService
{
    public function order(AbstractPizzaFactory $factory): Pizza
    {
        return $factory->make();
    }
}
