<?php

namespace DesignPatternInPHP\AbstractFactory\Classes\Factories;

use DesignPatternInPHP\AbstractFactory\Classes\PHPTemplateRenderer;
use DesignPatternInPHP\AbstractFactory\Classes\Template\PHPPageTemplate;
use DesignPatternInPHP\AbstractFactory\Classes\Template\PHPTitleTemplate;
use DesignPatternInPHP\AbstractFactory\Interfaces\TemplateFactory;
use DesignPatternInPHP\AbstractFactory\Interfaces\TitleTemplate;
use DesignPatternInPHP\AbstractFactory\Interfaces\PageTemplate;
use DesignPatternInPHP\AbstractFactory\Interfaces\TemplateRenderer;

/**
 * Each Concrete Factory corresponds to a specific variant (or family) of products.
 * Class PHPTemplateFactory
 *
 * This concrete Factory creates PHPTemplate templates.
 */
class PHPTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPPageTemplate($this->createTitleTemplate());
    }


    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}