<?php

namespace DesignPatternInPHP\AbstractFactory\Interfaces;

/**
 * This is another  Product type, which describes whole page templates.
 */
interface PageTemplate
{
    public function getTemplateString(): string;
}