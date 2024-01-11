<?php

namespace DesignPatternInPHP\AbstractFactory\Classes\Template;

use DesignPatternInPHP\AbstractFactory\Interfaces\TitleTemplate;

/**
 * This Concrete Product provides PHPTemplate page title templates.
 */
class PHPTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1> <?= \$title; ?> </h1>";
    }
}