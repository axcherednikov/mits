<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good\Notifications\Transports;

final class SMSTransport implements AbstractTransport
{
    public function __construct(private readonly string $phone)
    {
    }

    public function send(string $message): true
    {
        if (SMS::send($this->phone, $message)) {
            throw new \RuntimeException('Failed to send sms');
        }

        return true;
    }
}
