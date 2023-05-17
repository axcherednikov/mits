<?php

namespace App\Examples\SOLID\Good\Repository;

interface RepositoryInterface
{
    public function create(array $data): bool;

    public function update(array $data): bool;

    public function delete(): bool;

    public function find(): array;
}
