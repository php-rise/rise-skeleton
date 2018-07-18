<?php
/**
 * Routes.
 *
 * @var \Rise\Router\Scope $scope
 */

$scope->use([
	'Rise\Middlewares\Session.run',
	'Rise\Middlewares\Session.validateCsrf',
]);

$scope->get('/', 'App\Handlers\Home.index', 'root');
