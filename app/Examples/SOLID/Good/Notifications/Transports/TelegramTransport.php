<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good\Notifications\Transports;

final class TelegramTransport implements AbstractTransport
{
    public function __construct(private readonly string $id)
    {
    }

    public function send(string $message): true
    {
        if (Telegram::send($this->id, $message)) {
            throw new \RuntimeException('Failed to send telegram');
        }

        return true;
    }
}
