<?php

namespace DesignPatternInPHP\AbstractFactory\Classes\Template;

use DesignPatternInPHP\AbstractFactory\Interfaces\TitleTemplate;

/**
 * This Concrete Product provides Twig page title templates.
 */
class TwigTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1> {{title}} </h1>";
    }
}