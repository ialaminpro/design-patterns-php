<?php

namespace DesignPatternInPHP\AbstractFactory\Classes\Template;

use DesignPatternInPHP\AbstractFactory\Interfaces\PageTemplate;

/**
 * The page template uses the title sub-template, so we have to provide the way
 * to set it in the sub-template object. The abstract factory will link the page
 * template with a title template of the same variant.
 */
abstract class BasePageTemplate implements PageTemplate
{
    /**
     * @var $titleTemplate
     */
    protected $titleTemplate;

    public function __construct($titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;
    }

}