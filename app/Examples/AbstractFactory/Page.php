<?php

declare(strict_types=1);

namespace App\Examples\AbstractFactory;

use App\Examples\AbstractFactory\Factory\TemplateFactory;

final class Page
{
    public function __construct(public string $title, public string $content)
    {
    }

    public function render(TemplateFactory $factory): string
    {
        $pageTemplate = $factory->createPageTemplate();

        $renderer = $factory->getRenderer();

        return $renderer->render($pageTemplate->getTemplateString(), [
            'title' => $this->title,
            'content' => $this->content
        ]);
    }
}
