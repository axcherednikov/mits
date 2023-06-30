<?php

declare(strict_types=1);

namespace App\Examples\AbstractFactory\Twig;

use App\Examples\AbstractFactory\TemplateRenderer;

final class TwigRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        // Логика рендеринга с помощью twig
        return $templateString;
    }
}
