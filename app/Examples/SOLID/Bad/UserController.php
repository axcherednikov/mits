<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Bad;

use App\Examples\SOLID\Bad\Repositories\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Symfony\Component\Routing\Annotation\Route;

final class UserController extends Controller
{
    public function __construct(private readonly UserRepository $userRepository)
    {
    }

    #[Route(path: '/user/{id}', methods: ['GET'])]
    public function show(int $id): Response
    {
        return new Response($this->userRepository->getById($id));
    }
}
