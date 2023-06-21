<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good\Repository\User;

use App\Examples\SOLID\Good\DTO\UserData;
use Illuminate\Support\Facades\Http;

final class Api1CUserRepository implements UserRepositoryInterface
{
    public function getById(int $id): UserData
    {
        $data = Http::get('https://api1c.ru/api/v1/user/' . $id)->collect();

        return new UserData(
            $data['id'],
            $data['name'],
            $data['email'],
        );
    }
}
