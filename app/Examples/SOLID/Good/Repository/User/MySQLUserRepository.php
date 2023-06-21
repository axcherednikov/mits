<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good\Repository\User;

use App\Examples\SOLID\Good\DTO\UserData;
use App\Models\User;

final class MySQLUserRepository implements UserRepositoryInterface
{
    public function getById(int $id): UserData
    {
        $user = User::findOrFail($id);

        return new UserData(
            $user->id,
            $user->name,
            $user->email,
        );
    }
}
