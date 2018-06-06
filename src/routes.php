<?php
/**
 * Routes.
 */

/**
 * @var \Rise\Router\Scope $scope
 */

$scope->createScope(function($scope) {
	$scope->setBeforeHandlers(['CsrfValidator.validate']);

	$scope->get('', 'Home.index', 'root');
});
