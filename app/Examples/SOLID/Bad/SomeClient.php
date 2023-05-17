<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Bad;

use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
class SomeClient
{
    private readonly string $driver;

    public function __construct()
    {
        $this->driver = config('app.env') === 'testing' ? 'sqlite' : config('app.driver');
    }

    public function create(array $data): Response
    {
        if ($this->driver === 'mysql') {

            /*
             * Логика работы с базой, логгированием, связью с внешним api если потребуется и т.д.
             */
            return new Response();
        }

        if ($this->driver === 'pgsql') {

            // logic
            return new Response();
        }

        if ($this->driver === 'sqlite') {

            // logic
            return new Response('true');
        }

        return new Response('false');
    }

    public function update(): Response
    {
        if ($this->driver === 'mysql') {

            // logic
            return new Response();
        }

        if ($this->driver === 'pgsql') {

            // logic
            return new Response();
        }

        if ($this->driver === 'sqlite') {

            // logic
            return new Response('true');
        }

        return new Response('false');
    }

    public function delete(): Response
    {
        if ($this->driver === 'mysql') {

            // logic
            return new Response();
        }

        if ($this->driver === 'pgsql') {

            // logic
            return new Response();
        }

        if ($this->driver === 'sqlite') {

            // logic
            return new Response('true');
        }

        return new Response('false');
    }

    public function find(): Response
    {
        if ($this->driver === 'mysql') {

            // logic
            return new Response();
        }

        if ($this->driver === 'pgsql') {

            // logic
            return new Response();
        }

        if ($this->driver === 'sqlite') {

            // logic
            return new Response('true');
        }

        return new Response('false');
    }
}
