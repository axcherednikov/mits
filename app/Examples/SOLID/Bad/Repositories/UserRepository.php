<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Bad\Repositories;

use App\Models\User;

class UserRepository
{
    public function getById(int $id): User
    {
        return User::findOrFail($id);
    }
}
