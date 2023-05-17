<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good\Repository;

use App\Examples\SOLID\Good\Clients\Client1C;
use Exception;

final class RepositoryFactory
{
    private Driver $driver;

    public function __construct()
    {
        $this->driver = new Driver();
    }

    /**
     * @return AbstractRepository
     * @throws Exception
     */
    public function make(): AbstractRepository
    {
        return match ($this->driver->get()) {
            DriverEnum::API1C => new Api1CRepository(new Client1C()),
            DriverEnum::MYSQL => new MysqlRepository(),
            DriverEnum::PGSQL => new PostgresRepository(),
            default => throw new Exception('Unknown driver'),
        };
    }
}
