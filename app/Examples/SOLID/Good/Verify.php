<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good;

class Verify implements SmsVerifyInterface, CallVerifyInterface
{
    public function send(string $phone): void
    {
        // Логика отправки СМС
    }

    public function call(string $phone): void
    {
        // Логика совершения вызова
    }
}
