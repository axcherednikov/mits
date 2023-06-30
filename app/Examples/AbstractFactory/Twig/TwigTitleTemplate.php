<?php

declare(strict_types=1);

namespace App\Examples\AbstractFactory\Twig;

use App\Examples\AbstractFactory\TitleTemplate;

final class TwigTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1>{{ title }}</h1>";
    }
}
