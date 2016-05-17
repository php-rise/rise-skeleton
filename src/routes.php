<?php
/**
 * Routes.
 */

/**
 * @var \Rise\Components\Router\Scope $scope
 */

$scope->createScope(function($scope) {
	$scope->setBeforeHandlers(['CsrfValidator.validate']);

	$scope->get('', 'Home.index', 'root');
});
