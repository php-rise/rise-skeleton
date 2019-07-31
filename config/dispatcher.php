<?php
/**
 * Configurations of dispatcher.
 *
 * "middlewares": List of middlewares / handlers dispatched when application starts.
 *
 * @var array
 */
return [
	'middlewares' => [
		'Rise\Middlewares\Response.run',
		'Rise\Middlewares\Router.run',
	],
];
