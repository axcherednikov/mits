<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good\Notifications\Transports;

interface AbstractTransport
{
    /**
     * @param  string  $message
     * @return bool
     * @throws \RuntimeException
     */
    public function send(string $message): true;
}
