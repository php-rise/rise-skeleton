<?php
/**
 * Configurations of router.
 *
 * "notFoundHandler": Handler for handling not found route.
 */
return [
	'notFoundHandler' => 'App\Handlers\Errors\NotFound.showHtml',
];
