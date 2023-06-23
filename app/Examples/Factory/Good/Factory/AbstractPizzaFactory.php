<?php

declare(strict_types=1);

namespace App\Examples\Factory\Good\Factory;

use App\Examples\Factory\Pizza;

abstract class AbstractPizzaFactory
{
    abstract protected function createPizza(): Pizza;

    public function make(): Pizza
    {
        $pizza = $this->createPizza();

        $pizza->makeDough();
        $pizza->making();
        $pizza->bake();
        $pizza->souse();

        return $pizza;
    }
}
