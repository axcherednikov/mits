<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good;

interface SmsVerifyInterface
{
    public function send(string $phone): void;
}
