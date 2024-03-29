<?php

namespace DesignPatternInPHP\AbstractFactory\Classes\Template;

/**
 * The PHPTemplate variant of the whole page templates.
 */
class PHPPageTemplate extends BasePageTemplate
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