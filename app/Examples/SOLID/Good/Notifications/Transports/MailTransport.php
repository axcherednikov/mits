<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good\Notifications\Transports;

final class MailTransport implements AbstractTransport
{

    public function send(string $message): true
    {
        try {
            Mail::send('emails.notification', ['message' => $message()]);
        } catch (\Exception $e) {
            throw new \RuntimeException('Failed to send mail');
        }

        return true;
    }
}
