<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Bad;

interface VerifyInterface
{
    public function send(string $phone): void;

    public function call(string $phone): void;
}
