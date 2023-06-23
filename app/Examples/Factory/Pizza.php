<?php

declare(strict_types=1);

namespace App\Examples\Factory;

interface Pizza
{
    public function makeDough(): void;

    public function making(): void;

    public function souse(): void;

    public function bake(): void;
}
