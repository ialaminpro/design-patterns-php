<?php

namespace DesignPatternInPHP\AbstractFactory\Classes;

use DesignPatternInPHP\AbstractFactory\Interfaces\TemplateRenderer;
use Twig\Environment;
use Twig\Loader\ArrayLoader;

/**
 * The renderer for Twig templates.
 */
class TwigRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        return (new Environment((new ArrayLoader(['template' => $templateString]))))->render('template', $arguments);
    }
}