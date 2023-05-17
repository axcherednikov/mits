<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good\Clients;

final class Client1C
{
    public function connect(): self
    {
        // Logic
        return $this;
    }

    public function create(array $data): bool
    {
        // Logic
        return true;
    }
}
