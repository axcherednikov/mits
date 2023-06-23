<?php

declare(strict_types=1);

namespace App\Examples\Factory\Good;

use App\Examples\Factory\Pizza;
use App\Examples\Factory\PizzaType;

final class Client
{
    public function order(): Pizza
    {
        $restaurant = new PizzaRestaurant();

        return $restaurant->orderPizza(PizzaType::Pepperoni);
    }
}
