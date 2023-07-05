<?php

declare(strict_types=1);

namespace App\Examples\Singleton;

final class Client
{
    public function isSingletonDB(): void
    {
        $db1 = DB::getInstance();
        $db2 = DB::getInstance();

        if ($db1 === $db2) {
            dump($db1);
            dump($db2);

            echo ' ' . PHP_EOL;
        } else {
            echo 'Это не одиночка' . PHP_EOL;
        }
    }

    public function checkSRP(): void
    {
        $db1 = DB::getInstance();
        $db1->setHost('example.com');
        $db1->setPort(1234);

        echo 'Хост объекта 1: ' . $db1->getHost() . PHP_EOL;
        echo 'Порт объекта 1: ' . $db1->getPort() . PHP_EOL;

        $db2 = DB::getInstance();
        $db2->setHost('qtim.pro');
        $db2->setPort(4321);

        echo ' ' . PHP_EOL;
        echo 'Хост объекта 2: ' . $db2->getHost() . PHP_EOL;
        echo 'Порт объекта 2: ' . $db2->getPort() . PHP_EOL;

        echo ' ' . PHP_EOL;
        echo 'Повторная проверка 1 объекта: ' . PHP_EOL;
        echo 'Хост объекта 1: ' . $db1->getHost() . PHP_EOL;
        echo 'Порт объекта 1: ' . $db1->getPort() . PHP_EOL;
    }
}
