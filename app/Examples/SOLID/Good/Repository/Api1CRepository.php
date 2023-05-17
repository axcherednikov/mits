<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good\Repository;

use App\Examples\SOLID\Good\Clients\Client1C;

final class Api1CRepository extends AbstractRepository
{
    public function __construct(private readonly Client1C $client)
    {
    }

    public function create(array $data): bool
    {
        // Logic
        $res = $this->client->connect()->create($data);

        return $res;
    }

    public function update(array $data): bool
    {
        // Logic

        return true;
    }

    public function delete(): bool
    {
        // Logic

        return true;
    }

    public function find(): array
    {
        // Logic

        return [];
    }
}
