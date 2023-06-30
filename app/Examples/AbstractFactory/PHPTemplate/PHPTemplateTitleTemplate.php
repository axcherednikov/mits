<?php

declare(strict_types=1);

namespace App\Examples\AbstractFactory\PHPTemplate;

use App\Examples\AbstractFactory\TitleTemplate;

final class PHPTemplateTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return '<h1><?= $title; ?></h1>';
    }
}
