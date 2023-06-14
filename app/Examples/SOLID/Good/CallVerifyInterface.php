<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good;

interface CallVerifyInterface
{
    public function call(string $phone): void;
}
