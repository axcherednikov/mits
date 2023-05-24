<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Bad\Notifications;

class SmsNotification extends AbstractNotification
{
    public function __construct(public readonly string $phone)
    {
    }

    public function send(string $message): bool
    {
        if (SMS::send($this->phone, $message)) {
            return true;
        }

        throw new \Exception('Failed to send sms');
    }
}
