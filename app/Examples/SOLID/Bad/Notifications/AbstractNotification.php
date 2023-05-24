<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Bad\Notifications;

use Illuminate\Support\Facades\Mail;

abstract class AbstractNotification
{
    public function send(string $message): bool
    {
        if (Mail::send('emails.notification', ['message' => $message()])) {
            return true;
        }

        return false;
    }
}
