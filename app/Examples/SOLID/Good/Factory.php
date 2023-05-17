<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good;

use Exception;

final class Factory
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
