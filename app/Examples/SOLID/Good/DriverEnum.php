<?php

declare(strict_types=1);

namespace App\Examples\SOLID\Good;

enum DriverEnum: string
{
    case MYSQL = 'mysql';

    case PGSQL = 'pgsql';

    case API1C = '1c';

    case SQLITE = 'sqlite';
}
