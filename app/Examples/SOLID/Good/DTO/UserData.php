<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good\DTO;

class UserData
{
    public function __construct(
        public int $id,
        public string $name,
        public string $email,
    ) {
    }
}
