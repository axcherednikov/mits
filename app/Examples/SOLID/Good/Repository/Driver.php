<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good\Repository;

use RuntimeException;

final class Driver
{
    public function get(): DriverEnum
    {
        $config = config('app.driver');

        return match ($config) {
            '1c' => DriverEnum::API1C,
            'pgsql' => DriverEnum::PGSQL,
            'mysql' => DriverEnum::MYSQL,
            'sqlite' => DriverEnum::SQLITE,
            default => throw new RuntimeException('Unknown driver'),
        };
    }
}
