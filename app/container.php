<?php

use Slim\Views\Twig;
use Slim\Views\TwigExtension;

$container = $app->getContainer();

$container['config'] = require 'config.php';
$container['view'] = function ($container) {
    $dir = dirname(__DIR__);
    $view = new Twig($dir . '/app/views', [
        'cache' => $container['config']['production'] ? $dir . '/tmp/cache' : false,
        'debug' => !$container['config']['production']
    ]);
    if (!$container['config']['production'])
        $view->addExtension(new Twig_Extension_Debug());
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new TwigExtension($container['router'], $basePath));
    return $view;
};
