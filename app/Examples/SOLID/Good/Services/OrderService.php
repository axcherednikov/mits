<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good\Services;

use App\Examples\SOLID\Bad\Notifications\SmsNotification;
use App\Examples\SOLID\Good\Notifications\Notification;
use App\Examples\SOLID\Good\Notifications\Transports\SMSTransport;
use App\Examples\SOLID\Good\Notifications\Transports\TelegramTransport;
use App\Examples\SOLID\Good\Repository\RepositoryFactory;
use Exception;

final class OrderService
{
    private readonly RepositoryFactory $factory;

    private readonly Notification $notification;

    public function __construct()
    {
        $this->factory = new RepositoryFactory();
        $this->notification = new Notification(new SMSTransport('89000000000'));
    }

    public function create(array $data): bool
    {
        try {
            $this->factory->make()->create($data);

            $this->notification
                ->setTransport(new TelegramTransport('34124143'))
                ->send('Заказ оформлен');

        } catch (Exception $e) {
            return false;
        }

        return true;
    }

    public function update(array $data): bool
    {
        try {
            $this->factory->make()->update($data);
        } catch (Exception $e) {
            return false;
        }

        return true;
    }

    public function delete(): bool
    {
        try {
            $this->factory->make()->delete();
        } catch (Exception $e) {
            return false;
        }

        return true;
    }

    public function find(): ?array
    {
        try {
            $this->factory->make()->find();
        } catch (Exception $e) {
            return null;
        }

        return [];
    }
}
