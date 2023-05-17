<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good;

use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
final class SomeClient
{
    private readonly OrderService $orderService;

    public function __construct()
    {
        $this->orderService = new OrderService();
    }

    public function create(): Response
    {
        return new Response($this->orderService->create([]));
    }

    public function update(): bool
    {
        return $this->orderService->update([]);
    }

    public function delete(): bool
    {
        return $this->orderService->delete();
    }

    public function find(): ?array
    {
        return $this->orderService->find();
    }
}
