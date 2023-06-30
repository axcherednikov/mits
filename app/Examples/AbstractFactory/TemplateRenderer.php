<?php

declare(strict_types=1);

namespace App\Examples\AbstractFactory;

interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}
