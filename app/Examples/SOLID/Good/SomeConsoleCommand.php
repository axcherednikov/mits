<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good;

use App\Examples\SOLID\Good\Services\OrderService;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand('some:command-delete-user')]
class SomeConsoleCommand
{
    private OrderService $service;

    public function __construct()
    {
        $this->service = new OrderService();
    }

    private function handle(): int
    {
        if ($this->service->delete()) {
            return 0;
        }

        return 1;
    }
}
