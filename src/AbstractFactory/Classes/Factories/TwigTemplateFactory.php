<?php

namespace DesignPatternInPHP\AbstractFactory\Classes\Factories;

use DesignPatternInPHP\AbstractFactory\Classes\Template\TwigPageTemplate;
use DesignPatternInPHP\AbstractFactory\Classes\Template\TwigTitleTemplate;
use DesignPatternInPHP\AbstractFactory\Classes\TwigRenderer;
use DesignPatternInPHP\AbstractFactory\Interfaces\TemplateFactory;
use DesignPatternInPHP\AbstractFactory\Interfaces\TitleTemplate;
use DesignPatternInPHP\AbstractFactory\Interfaces\PageTemplate;
use DesignPatternInPHP\AbstractFactory\Interfaces\TemplateRenderer;
/*
 * Each Concrete Factory corresponds to a specific variant (or family) of products.
 * Class TwigTemplateFactory
 *
 * This Concrete Factory creates Twig templates.
 */
class TwigTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
       return new TwigRenderer();
    }
}