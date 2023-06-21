<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good;

use App\Examples\SOLID\Good\Repository\User\UserRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Symfony\Component\Routing\Annotation\Route;

final class UserController extends Controller
{
    public function __construct(private readonly UserRepositoryInterface $userRepository)
    {
    }

    #[Route(path: '/users/{id}', methods: ['GET'])]
    public function show(int $id): Response
    {
        return new Response($this->userRepository->getById($id));
    }
}
