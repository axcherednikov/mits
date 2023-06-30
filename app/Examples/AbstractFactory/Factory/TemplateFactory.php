<?php

declare(strict_types=1);

namespace App\Examples\AbstractFactory\Factory;

use App\Examples\AbstractFactory\PageTemplate;
use App\Examples\AbstractFactory\TemplateRenderer;
use App\Examples\AbstractFactory\TitleTemplate;

interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;

    public function createPageTemplate(): PageTemplate;

    public function getRenderer(): TemplateRenderer;
}
