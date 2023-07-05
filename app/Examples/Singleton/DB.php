<?php

declare(strict_types=1);

namespace App\Examples\Singleton;

final class DB
{
    private static ?DB $instance = null;

    private string $host;

    private int $port;

    private function __construct()
    {
    }

    private function __clone(): void
    {
    }

    public static function getInstance(): DB
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function setHost(string $host): void
    {
        $this->host = $host;
    }

    public function setPort(int $port): void
    {
        $this->port = $port;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
}
