<?php
require_once __DIR__.'/../vendor/autoload.php';
$container = new Rise\Services\Container();
$initializer = $container->get('Rise\Services\Initializer');
$initializer->setProjectRootPath(__DIR__.'/..')->run();
