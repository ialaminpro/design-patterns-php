<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/
require __DIR__.'/vendor/autoload.php';

use DesignPatternInPHP\AbstractFactory\Classes\Factories\PHPTemplateFactory;
use DesignPatternInPHP\AbstractFactory\Classes\Factories\TwigTemplateFactory;
use DesignPatternInPHP\AbstractFactory\Page;

/**
 * Now, in other parts of the app, the client code can accept factory objects of
 * any type.
 */
$page = new Page('Sample page', 'This is the body.');
echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new PHPTemplateFactory());

// Uncomment the following if you have Twig installed.

 echo "Testing rendering with the Twig factory:\n"; echo $page->render(new TwigTemplateFactory());

