<?php
/**
 * Configurations of router.
 *
 * "routesFile": Location of the routes file relative to the project root.
 *
 * "notFoundHandler": Handler for handling not found route.
 */
return [
	'routesFile' => 'src/routes.php',
	'notFoundHandler' => 'Errors\NotFound.showHtml',
];
