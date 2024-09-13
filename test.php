<?php

declare(strict_types=1);

use App\Examples\Factory\Good\Factory\CheesePizzaFactory;
use App\Examples\Factory\Good\Factory\VeggiePizzaFactory;
use App\Examples\Factory\Good\PizzaService;

require __DIR__ . '/vendor/autoload.php';

$service = new PizzaService();

$chessePizza = $service->order(new CheesePizzaFactory());

$veganPizza = $service->order(new VeggiePizzaFactory());

dump($veganPizza, $chessePizza);
