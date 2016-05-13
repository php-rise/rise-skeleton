<?php
require_once __DIR__.'/../vendor/autoload.php';
service()->setService('initializer', new \Rise\Services\Initializer);
service('initializer')->setProjectRootPath(__DIR__.'/..')->run();
