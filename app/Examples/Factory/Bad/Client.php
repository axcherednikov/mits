<?php

declare(strict_types=1);

namespace App\Examples\Factory\Bad;

use App\Examples\Factory\CheesePizza;
use App\Examples\Factory\PepperoniPizza;
use App\Examples\Factory\Pizza;
use App\Examples\Factory\PizzaType;
use App\Examples\Factory\VeggiePizza;

final class Client
{
    public function order(PizzaType $type): Pizza
    {
        $pizza = null;

        switch ($type) {
            case PizzaType::Cheese:
                $pizza = new CheesePizza();
                break;
            case PizzaType::Veggie:
                $pizza = new VeggiePizza();
                break;
            case PizzaType::Pepperoni:
                $pizza = new PepperoniPizza();
                break;
        }

        if (isset($pizza)) {
            $pizza->makeDough();
            $pizza->making();
            $pizza->bake();
        }

        if ($pizza === null) {
            throw new \DomainException('Pizza not found');
        }

        return $pizza;
    }
}
