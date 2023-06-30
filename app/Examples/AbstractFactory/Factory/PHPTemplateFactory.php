<?php

declare(strict_types=1);

namespace App\Examples\AbstractFactory\Factory;

use App\Examples\AbstractFactory\PageTemplate;
use App\Examples\AbstractFactory\PHPTemplate\PHPTemplatePageTemplate;
use App\Examples\AbstractFactory\PHPTemplate\PHPTemplateRenderer;
use App\Examples\AbstractFactory\PHPTemplate\PHPTemplateTitleTemplate;
use App\Examples\AbstractFactory\TemplateRenderer;
use App\Examples\AbstractFactory\TitleTemplate;

final class PHPTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTemplateTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}
