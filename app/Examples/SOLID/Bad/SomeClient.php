<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Bad;

use App\Examples\SOLID\Bad\Notifications\MailNotification;
use App\Examples\SOLID\Bad\Notifications\SendPulseNotification;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
class SomeClient
{
    private readonly string $driver;

    private readonly string $notification;

    public function __construct()
    {
        $this->driver = config('app.env') === 'testing' ? 'sqlite' : config('app.driver');
        $this->notification = config('app.notification', 'email');
    }

    public function create(array $data): Response
    {
        if ($this->driver === 'mysql') {

            /*
             * Логика работы с базой, логгированием, связью с внешним api если потребуется и т.д.
             */
            $this->sendNotification();

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

    private function sendNotification(): void
    {
        if ($this->notification === 'email') {
            (new MailNotification())->send('sdasds');
        } elseif ($this->notification === 'sendpulse') {
            try {
                (new SendPulseNotification('7899494949', '3454534'))->send('sdasds');
            } catch (\Exception $e) {
                \Log::error('sendpulse error: ' . $e->getMessage());
            }
        } elseif ($this->notification === 'sms') {
            try {
                (new SmsNotification('7899494949'))->send('sdasds');
            } catch (\Exception $e) {
                \Log::error('sms error: ' . $e->getMessage());
            }
        }
    }
}
