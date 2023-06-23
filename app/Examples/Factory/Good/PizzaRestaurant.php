<?php

declare(strict_types=1);

namespace App\Examples\Factory\Good;

use App\Examples\Factory\Pizza;
use App\Examples\Factory\PizzaType;

final readonly class PizzaRestaurant
{
    public function __construct(
        private PizzaFactory $pizzaFactory = new PizzaFactory()
    ) {
    }

    public function orderPizza(PizzaType $type): Pizza
    {
        $pizza = $this->pizzaFactory->createPizza($type);

        $pizza->makeDough();
        $pizza->making();
        $pizza->bake();

        return $pizza;
    }
}
