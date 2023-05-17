<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Bad;

use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand('some:command-delete-user')]
class SomeConsoleCommand
{
    private readonly string $driver;

    public function __construct()
    {
        $this->driver = config('app.env') === 'testing' ? 'sqlite' : config('app.driver');
    }

    public function handle(): int
    {
        if ($this->driver === 'mysql') {
            // Logic
            return 0;
        }

        if ($this->driver === 'pgsql') {
            // Logic
            return 0;
        }

        if ($this->driver === 'sqlite') {
            // Logic
            return 0;
        }

        return 1;
    }
}
