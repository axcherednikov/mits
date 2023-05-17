<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good;

use Exception;

final class OrderService
{
    private readonly Factory $factory;

    public function __construct()
    {
        $this->factory = new Factory();
    }

    public function create(array $data): bool
    {
        try {
            $this->factory->make()->create($data);
        } catch (Exception $e) {
            return false;
        }

        return true;
    }

    public function update(array $data): bool
    {
        try {
            $this->factory->make()->update($data);
        } catch (Exception $e) {
            return false;
        }

        return true;
    }

    public function delete(): bool
    {
        try {
            $this->factory->make()->delete();
        } catch (Exception $e) {
            return false;
        }

        return true;
    }

    public function find(): ?array
    {
        try {
            $this->factory->make()->find();
        } catch (Exception $e) {
            return null;
        }

        return [];
    }
}
