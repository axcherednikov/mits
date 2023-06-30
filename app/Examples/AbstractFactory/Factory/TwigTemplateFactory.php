<?php

declare(strict_types=1);

namespace App\Examples\AbstractFactory\Factory;

use App\Examples\AbstractFactory\PageTemplate;
use App\Examples\AbstractFactory\TemplateRenderer;
use App\Examples\AbstractFactory\TitleTemplate;
use App\Examples\AbstractFactory\Twig\TwigPageTemplate;
use App\Examples\AbstractFactory\Twig\TwigRenderer;
use App\Examples\AbstractFactory\Twig\TwigTitleTemplate;

final class TwigTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new TwigRenderer();
    }
}
