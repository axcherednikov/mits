<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Bad\Notifications;

class SendPulseNotification extends SmsNotification
{
    public function __construct(string $phone, public readonly string $key)
    {
        parent::__construct($phone);
    }

    public function send(string $message): bool
    {
        if (SendPulse::send($this->phone, $message, $this->key)) {
            return true;
        }

        throw new \Exception('Failed to send sms');
    }
}
