<?php

declare(strict_types=1);

namespace App\Examples\AbstractFactory\PHPTemplate;

use App\Examples\AbstractFactory\BasePageTemplate;
use App\Examples\AbstractFactory\PageTemplate;

final class PHPTemplatePageTemplate extends BasePageTemplate implements PageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return <<<HTML
            <div class="page">
                $renderedTitle
                <article class="content"><?= \$content; ?></article>
            </div>
        HTML;
    }
}
