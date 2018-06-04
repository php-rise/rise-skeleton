<?php
require_once __DIR__.'/../vendor/autoload.php';

$container = new Rise\Container();
$initializer = $container->get('Rise\Initializer');
$initializer->setProjectRootPath(__DIR__.'/..')->run();
