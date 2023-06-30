<?php

declare(strict_types=1);

namespace App\Examples\AbstractFactory\PHPTemplate;

use App\Examples\AbstractFactory\TemplateRenderer;

final class PHPTemplateRenderer implements TemplateRenderer
{

    public function render(string $templateString, array $arguments = []): string
    {
        extract($arguments);

        ob_start();

        // ОЧЕНЬ ОПАСНО, ЭТО ПРОСТО ПРИМЕР
        eval(' ?>' . $templateString . '<?php ');

        $result = ob_get_contents();
        ob_end_clean();

        return $result;
    }
}
