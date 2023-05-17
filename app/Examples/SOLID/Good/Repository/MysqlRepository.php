<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good\Repository;

final class MysqlRepository extends AbstractRepository
{
    public function create(array $data): bool
    {
        // Logic
        $this->model->create($data);

        return true;
    }

    public function update(array $data): bool
    {
        // Logic
        $this->model->update($data);

        return true;
    }

    public function delete(): bool
    {
        // Logic
        $this->model->delete();

        return true;
    }

    public function find(): array
    {
        // Logic
        $this->model->newQuery()->where()->get();

        return [];
    }
}
