<?php
require_once __DIR__.'/../vendor/autoload.php';

$container = new Rise\Container();
$app = $container->get('Rise\Application');
$app->setProjectRoot(__DIR__.'/..')->run();
