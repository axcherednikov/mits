<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good\Repository\User;

use App\Examples\SOLID\Good\DTO\UserData;

interface UserRepositoryInterface
{
    public function getById(int $id): UserData;
}
