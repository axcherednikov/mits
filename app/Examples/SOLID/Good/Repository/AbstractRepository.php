<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good\Repository;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository implements RepositoryInterface
{
    protected Model $model;

    public function setModel(Model $model): self
    {
        $this->model = $model;

        return $this;
    }

    abstract public function create(array $data): bool;

    abstract public function update(array $data): bool;

    abstract public function delete(): bool;

    abstract public function find(): array;
}
