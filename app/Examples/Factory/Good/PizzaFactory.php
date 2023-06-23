<?php

declare(strict_types=1);

namespace App\Examples\Factory\Good;

use App\Examples\Factory\CheesePizza;
use App\Examples\Factory\PepperoniPizza;
use App\Examples\Factory\Pizza;
use App\Examples\Factory\PizzaType;
use App\Examples\Factory\VeggiePizza;

final class PizzaFactory
{
    public function createPizza(PizzaType $type): Pizza
    {
        return match ($type) {
            PizzaType::Cheese => new CheesePizza(),
            PizzaType::Veggie => new VeggiePizza(),
            PizzaType::Pepperoni => new PepperoniPizza(),
        };
    }
}
