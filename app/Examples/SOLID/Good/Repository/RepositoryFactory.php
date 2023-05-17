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
        if ($this->driver->get() === DriverEnum::PGSQL) {
            return new PostgresRepository();
        }

        if ($this->driver->get() === DriverEnum::API1C) {
            return new Api1CRepository(new Client1C());
        }

        return new MysqlRepository();
    }
}
