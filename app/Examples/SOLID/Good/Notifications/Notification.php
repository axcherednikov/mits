<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good\Notifications;

use App\Examples\SOLID\Good\Notifications\Transports\AbstractTransport;
use App\Examples\SOLID\Good\Notifications\Transports\MailTransport;

final class Notification
{
    public function __construct(
        private AbstractTransport $transport = new MailTransport()
    ) {
    }

    public function setTransport(AbstractTransport $transport): self
    {
        $this->transport = $transport;

        return $this;
    }

    public function send(string $message): bool
    {
        return $this->transport->send($message);
    }
}
