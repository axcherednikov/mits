<?php

declare(strict_types=1);

namespace App\Examples\AbstractFactory;

abstract class BasePageTemplate
{
    public function __construct(protected TitleTemplate $titleTemplate)
    {
    }
}
